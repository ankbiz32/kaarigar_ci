<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }

        public function Slide($id)
        {  
            $d= $this->fetch->getInfoById($id, 'hero_slider');
            $upath= 'assets/images/banner-img/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'hero_slider');
            if($status){
                unlink("$upath");
                $this->session->set_flashdata('success','Slide deleted!');
                redirect('Admin/Hero_sliders');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Hero_sliders');
            }
        }

        public function Service($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'services');
            $path= 'assets/images/extra-services-img/'.$d->img_src;
            $path2= 'assets/images/services-img/'.$d->icon_src;
            $status= $this->delete->deleteInfo($id, 'services');
            $status= $this->delete->deleteInfoConds(['service_id'=>$id], 'sub_services');
            $status= $this->delete->deleteInfoConds(['service_id'=>$id], 'services_locations');
            if($status){
                unlink("$path");
                unlink("$path2");
                $this->session->set_flashdata('success','Service Deleted!');
                redirect('Admin/Services');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Services');
            }
        }

        public function subService($svid,$id)
        {
            
            $status= $this->delete->deleteInfo($id, 'sub_services');
            if($status){
                $this->session->set_flashdata('success','Sub Service Deleted!');
                redirect('Admin/subService/'.$svid);
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/subService/'.$svid);
            }
        }

        public function User($id)
        {
            $status= $this->delete->deleteInfo($id, 'users');
            if($status){
                $this->session->set_flashdata('success','User deleted!');
                redirect('Admin/Users');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Users');
            }
        }
        
        public function Location($id)
        {
            $status= $this->delete->deleteInfo($id, 'locations');
            if($status){
                $this->session->set_flashdata('success','Location deleted!');
                redirect('Admin/Locations');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Locations');
            }
        }
        
        public function Application($id)
        {
            $status= $this->delete->deleteInfo($id, 'job_appl');
            if($status){
                $this->session->set_flashdata('success','Application deleted!');
                redirect('Admin/Applications');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Applications');
            }
        }
        
        public function Feedback($id)
        {
            $status= $this->delete->deleteInfo($id, 'feedbacks');
            if($status){
                $this->session->set_flashdata('success','Feedback deleted!');
                redirect('Admin/Feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Feedbacks');
            }
        }

        public function Gallery($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'gallery');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'gallery');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Image Deleted!');
                redirect('Admin/Gallery');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Gallery');
            }
        }

   



}
