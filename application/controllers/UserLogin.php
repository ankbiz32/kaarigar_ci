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

