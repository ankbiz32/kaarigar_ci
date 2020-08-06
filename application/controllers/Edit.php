<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {

        function __construct()
        {
            parent:: __construct();
            $this->redirectIfNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('EditModel','edit');
        }

        public function Slide($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Hero_sliders');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'hero_slider');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'hero_slider');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Slide Updated !');
                redirect('Admin/Hero_sliders');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Hero_sliderss');
            }
        }

        public function Service($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Services');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'services');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'services');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Service Updated !');
                redirect('Admin/Services');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Services');
            }
        }

        public function Product($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Products');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'products');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'products');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Product Updated !');
                redirect('Admin/Products');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Products');
            }
        }

        public function Scheme($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "*",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Schemes');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'schemes');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'schemes');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Scheme Updated !');
                redirect('Admin/Schemes');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Schemes');
            }
        }

        public function Role($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateRole($data, $id, 'reg_roles');
            if($status==true){
                $this->session->set_flashdata('success','Role Updated !');
                redirect('Admin/Roles');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Roles');
            }
        }

        public function Feedback($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateInfo($data, $id, 'feedbacks');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Success Story Updated !');
                redirect('Admin/Feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Feedbacks');
            }
        }

        public function Event($id)
        {
            $data=$this->input->post();
            $data['slug']=$this->generate_url_slug($data['heading'],'events');
            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Event');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'events');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'events');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Event Updated !');
                redirect('Admin/Events');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Events');
            }
        }

        public function Project($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Projects');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'events');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'projects');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Project Updated !');
                redirect('Admin/Projects');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Projects');
            }
        }

        
        public function Header_images($name){
            if($_FILES['img']['name']!=null){
                $path ='assets/images/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp",
                    "remove_spaces" => TRUE,
                    "max_size" => 550,
                    "overwrite" => true,
                    'file_name' => $name.'.jpg'
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                    redirect('Admin/editableImages');
                } 
                else {
                    $this->session->set_flashdata('success',"Image updated" );
                    redirect('Admin/editableImages');
                }
            }
            else{
                $this->session->set_flashdata('failed','No file selected' );
                redirect('Admin/editableImages');
            }
        }


        public function Gallery($id)
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
                    $d= $this->fetch->getInfoById($id,'gallery');
                    $path= 'assets/images/'.$d->img_src;
                    $status= $this->edit->updateInfo($data,$id, 'gallery');
                    if($status){
                        unlink($path);
                        $this->session->set_flashdata('success','Image Updated!' );
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

        public function webProfile()
        {
            $data=$this->input->post();
            $status= $this->edit->updateWebProfile($data);

            if($status){
                $this->session->set_flashdata('success','Web Profile Updated !');
                redirect('Admin/webProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/webProfile');
            }
        }

        public function enqStatus($id)
        {
            $status= $this->edit->updateEnqStatus($id);
            if($status){
                redirect('Admin');
            }
            else{
                redirect('Admin');
            }
        }

        public function adminProfile($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateAdminProfile($data,$id);
            $user=$this->fetch->getAdminProfile();
            $this->session->set_userdata(['user' =>  $user]);

            if($status){
                $this->session->set_flashdata('success','Admin Panel Profile Updated !');
                redirect('Admin/adminProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/adminProfile');
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
