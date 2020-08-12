<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
        }

        public function Slide()
        {
            $this->form_validation->set_rules('heading', 'Heading', 'required');
            $this->form_validation->set_rules('descr', 'Description', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Hero_sliders');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('heading'=>$this->input->post('heading'),
                            'descr'=>$this->input->post('descr'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'hero_slider');

                    if($status){
                        $this->session->set_flashdata('success','New Slide added !' );
                        redirect('Admin/Hero_sliders');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Hero_sliders');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Hero_sliders');
            } 
        }

        
        public function Services()
        {
                $this->load->view('admin/adminheader',['title'=>'Add service','submissionPath'=>base_url('Add/saveService')]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/service-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function saveService()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('descr', 'Description', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $path ='assets/images/extra-services-img/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 1100
                );
                $this->load->library('upload', $initialize, 'imgupload');
                $this->imgupload->initialize($initialize);
                if (!$this->imgupload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Services');
                }
                else {
                    $imgdata = $this->imgupload->data();
                    $imagename = $imgdata['file_name'];
                    $data['img_src']=$imagename;
                }

                $path ='assets/images/services-img/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 300
                );
                $this->load->library('upload', $initialize,'iconupload');
                $this->iconupload->initialize($initialize);
                if (!$this->iconupload->do_upload('icon')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Services');
                }
                else {
                    $imgdata = $this->iconupload->data();
                    $imagename = $imgdata['file_name'];
                    $data['icon_src']=$imagename;
                }

                // echo '<pre>'; var_dump($data); exit;

                $data['slug']=$this->generate_url_slug($data['name'],'services');
                $status= $this->save->saveInfo('services',$data);
                if($status){
                    $this->session->set_flashdata('success','New Service added !' );
                    redirect('Admin/Services');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Services');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Add/Services');
            } 
        }

        public function Feedback()
        {
            $this->form_validation->set_rules('content', 'Feedback', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            if($this->form_validation->run() == true){
                $data=array('content'=>$this->input->post('content'),
                        'name'=>$this->input->post('name')
                        );
                $status= $this->save->saveInfo($data, 'feedbacks');
                if($status){
                    $this->session->set_flashdata('success','New Success story added !' );
                    redirect('Admin/Feedbacks');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Feedbacks');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Feedbacks');
            } 
        }

        public function Event()
        {
            $this->form_validation->set_rules('heading', 'Heading', 'required');
            $this->form_validation->set_rules('descr', 'Description', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Events');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('heading'=>$this->input->post('heading'),
                            'descr'=>$this->input->post('descr'),
                            'img_src'=>$imagename,
                            'slug'=>$this->generate_url_slug($this->input->post('heading'),'events'),
                            'date'=>date('Y-m-d')
                            );
                    $status= $this->save->saveInfo($data, 'events');

                    if($status){
                        $this->session->set_flashdata('success','New Event added !' );
                        redirect('Admin/Events');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Events');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Events');
            } 
        }

   

        public function Gallery()
        {
            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Gallery');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('img_src'=>$imagename);
                    $status= $this->save->saveInfo($data, 'gallery');

                    if($status){
                        $this->session->set_flashdata('success','New Image added !' );
                        redirect('Admin/Gallery');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Gallery');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed','No image selected !');
                redirect('Admin/Gallery');
            } 
        }

        public function Mail()
        {
            $name=$this->input->post('name');
            $phone=$this->input->post('phone');
            $message=$this->input->post('message');
            $guest_email=$this->input->post('email');
            
            $mail_arr = $this->fetch->getWebProfile();
            $landing_mail = $mail_arr->email;
            
            $to=$landing_mail;
            $msg ="You have a new qnquiry from- \n\r Name:".$name.".\n\r Phone:".$phone."\n\r E-mail:".$guest_email."\n\r Purpose:".$message;
            $subject = "DigiKraft Social - New Enquiry";
            $headers = "From:" . $name;

            mail($to, $subject, $msg, $headers);
            
            $data=$this->input->post();
            $data['date']=date('Y-m-d');
            $status= $this->save->saveEnquiry($data);

            if($status){
                $this->session->set_flashdata('success','Mail Sent!  We will connect with you soon.' );
                redirect('Contact');
            }
            else{
                $this->session->set_flashdata('failed','Error sending mail !');
                redirect('Contact');
            }
        }

        public function Subscribe()
        {
            $guest_email=$this->input->post('email');
            
            $mail_arr = $this->fetch->getWebProfile();
            $landing_mail = $mail_arr->email;
            
            $to=$landing_mail;
            $msg ="You have a new Subscription from- \n\r E-mail:".$guest_email;
            $subject = "DigiKraft Social - New Subscription";
            $headers = "From:" . $guest_email;

            if(mail($to, $subject, $msg, $headers)){
                $this->session->set_flashdata('success','Subscribed !' );
                redirect('Home');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Home');
            }
        }


        function generate_url_slug($string,$table,$field='slug',$key=NULL,$value=NULL){
            $t =& get_instance();
            $slug = url_title($string);
            $slug = strtolower($slug);
            $i = 0;
            $params = array ();
            $params[$field] = $slug;
            if($key)$params["$key !="] = $value; 
            while ($t->db->where($params)->get($table)->num_rows())
            {
                if (!preg_match ('/-{1}[0-9]+$/', $slug )){
                    $slug .= '-' . ++$i;
                }
                else{
                    $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
                }
                $params [$field] = $slug;
            }
                return $slug;
        }



}
