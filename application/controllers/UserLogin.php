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
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Login',
								'web'=>$web
						]
					);
		$this->load->view('login');
		$this->load->view('footer');
    }

    
	public function Register()
	{
        $this->redirectUserLoggedIn();
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Register',
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
                $_SESSION["mobile_no"] =$data['mobile_no'];
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

    public function authenticate(){
        $this->redirectUserLoggedIn();
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]');
        $response ['errors'] = '';
        if($this->form_validation->run() == FALSE){
            $response[ 'errors' ]= validation_errors() ;
        }
        else{
            if($user = $this->auth->authenticateUser($this->input->post()) ){
                $this->session->set_userdata(['reg' =>  $user]);
                $this->redirectUserLoggedIn();
            }else{
                $response['errors'] .= "Invalid E-mail or Password";
            }
        }
        $this->load->view('users/userlogin',$response);
    }

    public function changePwd(){
        $this->form_validation->set_rules('oldp', 'Old Password', 'required|min_length[6]');
        $this->form_validation->set_rules('newp', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('cnfp', 'Confirm Password', 'required|min_length[6]');
        if($this->form_validation->run() == TRUE){
            $data=$this->input->post();
            $admProfile=$this->fetch->getAdminProfile();
            if($data['newp']==$data['cnfp']){
                if( password_verify($data['oldp'], $admProfile->pwd) ){
                    $hash['pwd'] = password_hash( $this->input->post('cnfp'), PASSWORD_DEFAULT );
                    $status=$this->auth->changeLoginPassword($hash, $admProfile->user_id);

                    if($status){
                        $this->session->set_flashdata('success','Password Updated !');
                        redirect('Admin/adminProfile');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/adminProfile');
                    }
                }
                else{
                    $this->session->set_flashdata('failed','Invalid old password !');
                    redirect('Admin/adminProfile');
                }
            }
            else{
                $this->session->set_flashdata('failed','New & confirm password should be same !');
                redirect('Admin/adminProfile');
            }

            
        }
        else{
            $admProfile=$this->fetch->getAdminProfile();
            $this->load->view( 'admin/adminheader', ['admProfile' => $admProfile, 'errors'=> validation_errors()] ); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/adminProfile'); 
            $this->load->view('admin/adminfooter');  
        }
    }

    public function logout(){
        $this->session->unset_userdata(['reg']);
        $this->session->sess_destroy();
        $this->index();
    }


}

