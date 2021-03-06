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
                $path ='assets/images/banner-img';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 1100
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Hero_sliders');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array();
                    $data=array('heading'=>$this->input->post('heading'),
                            'descr'=>$this->input->post('descr'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo('hero_slider',$data);

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
                $locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
                $this->load->view('admin/adminheader',['title'=>'Add service','locations'=>$locations,'submissionPath'=>base_url('Add/saveService')]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/service-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function saveService()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('descr', 'Description', 'required');
            $this->form_validation->set_rules('location_id[]', 'Locations', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                if($data['min_charges']==''){
                    $data['min_charges']=null;
                }
                $location_ids=$data['location_id'];
                unset($data['location_id']);
                // echo '<pre>'; var_dump($data); exit;
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
                $insert_id= $this->save->saveInfo('services',$data);
                if($insert_id){
                    $count = sizeof($location_ids);
         
                    for($i = 0; $i<$count; $i++){
                        $entries[] = array(
                            'service_id'=>$insert_id,
                            'location_id'=>$location_ids[$i]
                            );
                    }
                    // echo '<pre>'; var_dump($entries); exit;
                    $status=$this->save->batchInsert($entries);
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
   
        public function subService($svid)
        {
                $svc=$this->fetch->getInfoById($svid,'services');
                $this->load->view('admin/adminheader',['title'=>'Add sub service','svc'=>$svc,'submissionPath'=>base_url('Add/saveSubService/').$svid]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/sub-service-form'); 
                $this->load->view('admin/adminfooter');  
        }

        
        public function saveSubService($svid)
        {
            $this->form_validation->set_rules('text', 'Sub service name', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                if($data['min_charges']==''){
                    $data['min_charges']=null;
                }
                $data['service_id']=$svid;
                $insert_id= $this->save->saveInfo('sub_services',$data);
                if($insert_id){
                    $this->session->set_flashdata('success','New Service added !' );
                    redirect('Admin/subService/'.$svid);
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/subService/'.$svid);
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/subService/'.$svid);
            } 
        }
   

        public function Location()
        {
            $this->form_validation->set_rules('area', 'Area', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('pin_code', 'Pin code', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $status= $this->save->saveInfo('locations', $data);
                if($status){
                    $this->session->set_flashdata('success','New location added !' );
                    redirect('Admin/Locations');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Locations');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Locations');
            } 
        }

        public function Feedback()
        {
            $this->form_validation->set_rules('content', 'Feedback', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('rating', 'Rating', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $status= $this->save->saveInfo('feedbacks', $data);
                if($status){
                    $this->session->set_flashdata('success','New feedback added !' );
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
