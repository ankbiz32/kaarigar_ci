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
            $svc=$this->fetch->getInfoById($id,'services');
            $locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
            $inLocs=$this->fetch->getInfoConds('services_locations',['service_id'=>$id]);
            foreach($inLocs as $inL){
                $locs[]=$inL->location_id;
            }
            // echo '<pre>'; print_r($locs); exit;
            $this->load->view('admin/adminheader',['title'=>'Edit service','svc'=>$svc,'locations'=>$locations,'locs'=>$locs,'submissionPath'=>base_url('Edit/updateService/').$id]); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/service-form'); 
            $this->load->view('admin/adminfooter');  
        }

        public function updateService($id)
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
                if($_FILES['img']['name']!=null){
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
                        $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                        redirect('Admin/Services');
                    } 
                    else {
                        $imgdata = $this->imgupload->data();
                        $data['img_src'] = $imgdata['file_name'];
                        $d= $this->fetch->getInfoById($id,'services');
                        $upath= 'assets/images/extra-services-img/'.$d->img_src;
                    }
                }

                if($_FILES['icon']['name']!=null){
                    $path ='assets/images/services-img/';
                    $initialize = array(
                        "upload_path" => $path,
                        "allowed_types" => "*",
                        "remove_spaces" => TRUE,
                        "max_size" => 1100
                    );
                    $this->load->library('upload', $initialize, 'iconupload');
                    $this->iconupload->initialize($initialize);
                    if (!$this->iconupload->do_upload('icon')) {
                        $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                        redirect('Admin/Services');
                    } 
                    else {
                        $imgdata = $this->iconupload->data();
                        $data['icon_src'] = $imgdata['file_name'];
                        $d= $this->fetch->getInfoById($id,'services');
                        $upath2= 'assets/images/services-img/'.$d->icon_src;
                    }
                }

                // echo '<pre>'; var_dump($data); exit;
                $status= $this->edit->updateInfo($data, $id, 'services');
                if($status){
                    $this->load->model('DeleteModel','delete');
                    $status= $this->delete->deleteInfoConds(['service_id'=>$id], 'services_locations');

                    $this->load->model('AddModel','save');
                    $count = sizeof($location_ids);
                    for($i = 0; $i<$count; $i++){
                        $entries[] = array(
                            'service_id'=>$id,
                            'location_id'=>$location_ids[$i]
                            );
                    }
                    $status=$this->save->batchInsert($entries);

                    unlink($upath);
                    unlink($upath2);
                    $this->session->set_flashdata('success','Service Updated !');
                    redirect('Admin/Services');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Services');
                }
            }
            else{
                $this->session->set_flashdata('failed',trim(strip_tags(validation_errors())));
                redirect('Admin/Services');
            } 
        }
        
        public function subService($svid, $sbid)
        {
                $svc=$this->fetch->getInfoById($svid,'services');
                $subsvc=$this->fetch->getInfoById($sbid,'sub_services');
                $this->load->view('admin/adminheader',['title'=>'Edit sub service','svc'=>$svc,'subsvc'=>$subsvc,'submissionPath'=>base_url('Edit/updateSubService/').$svid.'/'.$sbid]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/sub-service-form'); 
                $this->load->view('admin/adminfooter');  
        }

        
        public function updateSubService($svid, $sbid)
        {
            $this->form_validation->set_rules('text', 'Sub service name', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                if($data['min_charges']==''){
                    $data['min_charges']=null;
                }
                $status= $this->edit->updateInfo($data, $sbid, 'sub_services');
                if($status){
                    $this->session->set_flashdata('success','Service updated !' );
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
   

        public function approveBooking($id)
        {
            $data=$this->input->post();
            $data['status']='APPROVED';
            $status= $this->edit->updateInfo($data, $id, 'bookings');
            if($status){
                $this->session->set_flashdata('success','Booking approved !');
                redirect('Admin/Bookings');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Bookings');
            }
        }

        public function rejectBooking($id)
        {
            $data=$this->input->post();
            $data['status']='REJECTED';
            $status= $this->edit->updateInfo($data, $id, 'bookings');
            if($status){
                $this->session->set_flashdata('success','Booking rejected !');
                redirect('Admin/Bookings');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Bookings');
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

        public function deactivateSubService($id,$svid)
        {
            $status= $this->edit->updateInfoConds('sub_services',['id'=>$id],['is_active'=>0]);
            if($status){
                $this->session->set_flashdata('success','Sub service status Updated !');
                redirect('Admin/subService/'.$svid);
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/subService/'.$svid);
            }
        }

        public function activateSubService($id, $svid)
        {
            $status= $this->edit->updateInfoConds('sub_services',['id'=>$id],['is_active'=>1]);
            if($status){
                $this->session->set_flashdata('success','Sub service status Updated !');
                redirect('Admin/subService/'.$svid);
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/subService/'.$svid);
            }
        }

        public function deactivateService($id)
        {
            $status= $this->edit->updateInfoConds('services',['id'=>$id],['is_active'=>0]);
            if($status){
                $this->session->set_flashdata('success','Service status Updated !');
                redirect('Admin/Services');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Services');
            }
        }

        public function activateService($id)
        {
            $status= $this->edit->updateInfoConds('services',['id'=>$id],['is_active'=>1]);
            if($status){
                $this->session->set_flashdata('success','Service status Updated !');
                redirect('Admin/Services');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Services');
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
            // echo'<pre>';var_dump('hi'.$data);exit;
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
