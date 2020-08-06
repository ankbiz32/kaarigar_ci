<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }

        // Delete Slider
        public function Slide($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'hero_slider');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'hero_slider');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Slide Deleted!');
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
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'services');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Service Deleted!');
                redirect('Admin/Services');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Services');
            }
        }

        public function Product($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'products');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'products');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Product Deleted!');
                redirect('Admin/Products');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Products');
            }
        }

        public function Scheme($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'schemes');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'schemes');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Scheme Deleted!');
                redirect('Admin/Schemes');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Schemes');
            }
        }

        public function Role($id)
        {
            $status= $this->delete->deleteRole($id, 'reg_roles');
            if($status){
                $this->session->set_flashdata('success','Role deleted!');
                redirect('Admin/Roles');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Roles');
            }
        }
        
        // Delete Feedbacks
        public function Feedback($id)
        {
            $status= $this->delete->deleteInfo($id, 'feedbacks');
            if($status){
                $this->session->set_flashdata('success','Success Story deleted!');
                redirect('Admin/Feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Feedbacks');
            }
        }
        
        // Delete Event
        public function Event($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'events');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'events');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Event Deleted!');
                redirect('Admin/Events');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Events');
            }
        }

        // Delete Gallery
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

        // Delete farmer registration
        public function Farmer_reg($id)
        {
            $status= $this->delete->deleteInfo($id, 'farmer_reg');
            if($status){
                $this->session->set_flashdata('success','Registration Deleted!');
                redirect('Admin');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin');
            }
        }

        // Delete partner registration
        public function Partner_reg($id)
        {
            $status= $this->delete->deletePartnerReg($id, 'partner_reg');
            if($status){
                $this->session->set_flashdata('success','Registration Deleted!');
                redirect('Admin');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin');
            }
        }



}
