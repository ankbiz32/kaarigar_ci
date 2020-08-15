<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Login controller
 * @author Ankur Agrawal
 */
class UserLogin extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model', 'auth');
        $this->load->model('GetModel', 'fetch');
    }

    public function index(){
        $this->redirectUserLoggedIn();
		$locations=$this->fetch->getInfo('locations');
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Login',
                                'locations'=>$locations,
                                'services_nav'=>$services_nav,
								'web'=>$web
						]
					);
		$this->load->view('login');
		$this->load->view('footer');
    }

    //========== For registration ================

	public function Register()
	{
        $this->redirectUserLoggedIn();
		$locations=$this->fetch->getInfo('locations');
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Register',
                                'locations'=>$locations,
                                'services_nav'=>$services_nav,
								'web'=>$web
						]
					);
		$this->load->view('register');
		$this->load->view('footer');
		$this->load->view('custom_scripts');
    }
    
	public function regStart()
	{
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile_no', 'Phone no.', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('pin_code', 'Pin code', 'required|min_length[6]|max_length[6]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if($this->form_validation->run() == FALSE){
            echo false;
        }
        else{
            $this->load->model('AddModel', 'add');
            $data['fname'] = $this->input->post('name');
            $data['mobile_no'] = $this->input->post('mobile_no');
            $uid=$this->add->create_user('users',$data);
            if($uid){
                $response=array();
                $_SESSION['mobile_no'] =$data['mobile_no'];
                $response['uid']=$uid;
                $_SESSION["uid"] =$response['uid'];

                $data2['user_id'] = $uid;
                $data2['pin_code'] = $this->input->post('pin_code');
                $data2['address'] = $this->input->post('address');
                $uiid=$this->add->saveInfo('user_info',$data2);

                $response['vno']=rand(1000,9999);
                $_SESSION["vno"] =$response['vno'];

                echo json_encode($response);
            }
        }
	}
    
	public function regFinish()
	{
        sleep(1);
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_rules('cpwd', 'Confirm pasword', 'required');
        if($this->form_validation->run() == FALSE){
            $response=false;
            echo json_encode($response);
        }
        else{
            $this->load->model('EditModel', 'edit');
            $data= array();
            $data['pwd']=password_hash($this->input->post('pwd'), PASSWORD_DEFAULT);
            $data['is_verified'] = 1;
            if($this->edit->updateInfo($data,$_SESSION['uid'],'users')){
                unset($_SESSION['uid']);
                unset($_SESSION['vno']);
                unset($_SESSION['mobile_no']);
                $response=array();
                $response['error']=false;

                echo json_encode($response);
            }
            else{
                $response['error']=true;
                echo json_encode($response);
            }
        }
    }
    
    public function resend_otp()
	{
        // Send below info using SMS gateway
        // $_SESSION['mobile_no']
        // $_SESSION['vno'] (--- this is the OTP ---)
        sleep(1);
        echo true;
    }
    
    public function regPhoneCheck()
	{
        if($this->fetch->getPhone($this->input->post('mobile_no')) == 'DEL'){
            $this->load->model('DeleteModel', 'del');
            $del=$this->del->deleteInfoConds(['mobile_no'=>$this->input->post('mobile_no'),'role'=>'user'], 'users');
            echo false;
        }
        elseif($this->fetch->getPhone($this->input->post('mobile_no')) == 'YES'){
            echo true;
        }
        else{
           echo false;
        }
	}
    
	public function VerifyOtp()
	{
        if($_POST['otp']==$_SESSION['vno']){
            echo true;
        }
        else{
            echo false;
        }
    }

    
    //========== For Login authentication ================

    public function authenticate($return=NULL){
        $this->redirectUserLoggedIn();
        $this->form_validation->set_rules('mobile_no', 'Phone no.', 'required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]');
        $response ['errors'] = '';
        if($this->form_validation->run() == FALSE){
            $response[ 'errors' ]= '* Invalid inputs' ;
        }
        else{
            if($user = $this->auth->authenticateUser($this->input->post()) ){
                $this->session->set_userdata(['reg' =>  $user]);
                if($return!=NULL){
                    $this->session->set_flashdata('success','You are now logged in !');
                    redirect(base_url('service/').$return.'/loggedin');
                }else{
                    $this->session->set_flashdata('success','You are now logged in !');
                    redirect('profile');
                }
            }else{
                $response['errors'] .= "* Wrong phone no. or password";
            }
        }
        $this->session->set_flashdata('error', $response['errors']);
        if($return!=NULL){
            redirect(base_url('login?return_url=').$return);
        }else{
            redirect(base_url().'login');
        }
    }

    public function changePwd(){
        $this->form_validation->set_rules('oldp', 'Old Password', 'required');
        $this->form_validation->set_rules('newp', 'New Password', 'required');
        $this->form_validation->set_rules('cnfp', 'Confirm Password', 'required|matches[newp]');
        if($this->form_validation->run() == TRUE){
            $data=$this->input->post();
            if( password_verify($data['oldp'], $this->session->reg->pwd) ){
                $hash['pwd'] = password_hash( $this->input->post('cnfp'), PASSWORD_DEFAULT );
                $status=$this->auth->changeLoginPassword($hash, $admProfile->user_id);
                if($status){
                    $this->session->reg->pwd=$hash['pwd'];
                    $response=array();
                    $response['error']=false;
                    echo json_encode($response);
                }
                else{
                    $response=array();
                    $response['error']='* Critical Error.';
                    echo json_encode($response);
                }
            }
            else{
                $response=array();
                $response['error']='* Wrong current password.';
                echo json_encode($response);
            }
        }
        else{
            $response=array(); 
            $response['error']='* Invalid data. Please enter correct info.'; 
            echo json_encode($response);
        }
    }

    public function logout(){
        $this->session->unset_userdata(['reg']);
        $this->session->sess_destroy();
        $this->redirectUserNotLoggedIn();
    }


}

