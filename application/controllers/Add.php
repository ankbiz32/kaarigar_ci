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

        public function Product()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('link_src', 'Link text', 'required');
            $this->form_validation->set_rules('link_text', 'Link', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Products');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('name'=>$this->input->post('name'),
                            'link_src'=>$this->input->post('link_src'),
                            'link_text'=>$this->input->post('link_text'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'products');

                    if($status){
                        $this->session->set_flashdata('success','New Product added !' );
                        redirect('Admin/Products');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Products');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Products');
            } 
        }

        public function Service()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('link_src', 'Link text', 'required');
            $this->form_validation->set_rules('link_text', 'Link', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Services');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('name'=>$this->input->post('name'),
                            'link_src'=>$this->input->post('link_src'),
                            'link_text'=>$this->input->post('link_text'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'services');

                    if($status){
                        $this->session->set_flashdata('success','New Service added !' );
                        redirect('Admin/Services');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Services');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Services');
            } 
        }

        public function Scheme()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('short_name', 'Short form', 'required');
            $this->form_validation->set_rules('link', 'Link', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Schemes');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('name'=>$this->input->post('name'),
                            'short_name'=>$this->input->post('short_name'),
                            'link'=>$this->input->post('link'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'schemes');

                    if($status){
                        $this->session->set_flashdata('success','New Scheme added !' );
                        redirect('Admin/Schemes');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Schemes');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Schemes');
            } 
        }

        public function Role()
        {
            $this->form_validation->set_rules('role', 'Role name', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                // echo '<pre>'; var_dump($data); exit;
                $status= $this->save->saveInfo($data, 'reg_roles');
                if($status==true){
                    $this->session->set_flashdata('success','New Role added !' );
                    redirect('Admin/Roles');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Roles');
                }
            }
            else{
                $err=trim(strip_tags(validation_errors()));
                $this->session->set_flashdata('failed',$err);
                redirect('Admin/Roles');
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

        public function Project()
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
                    redirect('Admin/Projects');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('heading'=>$this->input->post('heading'),
                            'descr'=>$this->input->post('descr'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'projects');

                    if($status){
                        $this->session->set_flashdata('success','New Project added !' );
                        redirect('Admin/Projects');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Projects');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Projects');
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
