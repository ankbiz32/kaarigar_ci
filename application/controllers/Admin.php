<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('GetModel','fetch');
                $this->redirectIfNotLoggedIn();
        }

        public function index()
        {
                $bc=$this->fetch->record_countConds('bookings');
                $uc=$this->fetch->record_countConds('users',['role'=>'user']);
                $ec=$this->fetch->record_countConds('enquiries');
                $sc=$this->fetch->record_countConds('services');
                $enq=$this->fetch->getInfo('enquiries');
                $this->load->view('admin/adminheader',['title'=>'Dashboard', 'enq'=>$enq, 'book_count'=>$bc, 'usr_count'=>$uc, 'enq_count'=>$ec, 'svc_count'=>$sc]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/dashboard'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Users()
        {
                $data=$this->fetch->getInfoConds('users',['role'=>'user']);
                $this->load->view('admin/adminheader',['title'=>'Users','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/users'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Locations()
        {
                $data=$this->fetch->getInfo('locations');
                $this->load->view('admin/adminheader',['title'=>'Loations','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/locations'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Bookings()
        {
                $data=$this->fetch->getAllBookings('BOOKED');
                $this->load->view('admin/adminheader',['title'=>'Bookings','status'=>'New','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/bookings'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Subscriptions()
        {
                $data=$this->fetch->getInfo('subscriptions');
                $this->load->view('admin/adminheader',['title'=>'Subscriptions','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/subscriptions'); 
                $this->load->view('admin/adminfooter');  
        }

        public function approvedBookings()
        {
                $data=$this->fetch->getAllBookings('APPROVED');
                $this->load->view('admin/adminheader',['title'=>'Bookings','status'=>'Approved','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/bookings'); 
                $this->load->view('admin/adminfooter');  
        }

        public function rejectedBookings()
        {
                $data=$this->fetch->getAllBookings('REJECTED');
                $this->load->view('admin/adminheader',['title'=>'Bookings','status'=>'Rejected','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/bookings'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Hero_sliders()
        {
                $data=$this->fetch->getInfo('hero_slider');
                $this->load->view('admin/adminheader',['title'=>'Sliders','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/sliders'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Feedbacks()
        {
                $data=$this->fetch->getInfo('feedbacks');
                $this->load->view('admin/adminheader',['title'=>'Feedbacks','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/feedbacks'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Services()
        {
                $data=$this->fetch->getInfoByOrder('services');
                // echo'<pre>';var_dump($data);exit;
                $this->load->view('admin/adminheader',['title'=>'Services','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/services'); 
                $this->load->view('admin/adminfooter');  
        }
        
        public function subService($sid)
        {
                $svc=$this->fetch->getInfoById($sid,'services');
                $data=$this->fetch->getInfoConds('sub_services',['service_id'=>$sid]);
                $this->load->view('admin/adminheader',['title'=>'Sub services','data' => $data,'svc' => $svc]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/sub-services'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Gallery()
        {
                $data=$this->fetch->getInfoByOrder('gallery');
                $this->load->view('admin/adminheader',['title'=>'Gallery','data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/gallery'); 
                $this->load->view('admin/adminfooter');  
        }

        public function editableImages()
        {
                $this->load->view('admin/adminheader',['title'=>'Editable images']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/header_images'); 
                $this->load->view('admin/adminfooter');  
        }

        public function approveDetails()
        {
                $bkid=$this->input->post('id');
                $data=$this->fetch->getBookingDetails($bkid);
                $response='
                        <div class="row mb-3 px-2">
                                <div class="col-md-6">
                                        <div class="col-md-12 mb-1"><strong>Name:</strong> '.$data['info']->fname.'</div>
                                        <div class="col-md-12 mb-1"><strong>Phone:</strong> '.$data['info']->mobile_no.'</div>
                                        <div class="col-md-12 mb-1"><strong>Pin Code:</strong> '.$data['info']->pin_code.'</div>
                                        <div class="col-md-12 mb-1"><strong>Address:</strong> '.$data['info']->address.'</div>
                                        <div class="col-md-12 mb-1"><strong>Booked on:</strong> '.date('d-M-Y',strtotime($data['info']->created)).'</div>
                                        <div class="col-md-12"><strong>Service needed:</strong> '.$data['info']->name.'</div>
                                </div>
                                <div class="col-md-6">
                                        <div class="col-md-12 mb-1"><strong>Schedule date:</strong> <mark>'.date('d-M-Y',strtotime($data['info']->schedule_date)).'</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Schedule time:</strong> <mark> '.date('g:i a',strtotime($data['info']->schedule_time)).'</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Min bill amt.:</strong> <mark> ₹'.$data['info']->amt.'/-</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Customer remarks:</strong> '.$data['info']->customer_remarks.'</div>
                                        <div class="col-md-12 mb-1"><strong>Status:</strong> '.$data['info']->status.'</div>
                                </div>
                        </div>
                        <div class="row mb-3 px-2">
                        <table class="table table-bordered table-striped">
                                <tr>
                                  <th>Sub services requested</th>
                                  <th>Min charges *</th>
                                </tr>
                ';
                foreach($data['sub_svc'] as $sub){
                        $response.='
                                <tr>
                                  <td>'.$sub->text.'</td>
                                   <td>'.$sub->min_charges.'</td>
                                </tr>
                        ';
                }
                $response.='</table>
                        </div>
                        <form class="" method="POST" action="'.base_url().'Edit/approveBooking/'.$bkid.'">
                        <div class="row mb-2 px-2">
                                <label>Enter your remarks:</label>
                                <textarea class="form-control" name="admin_remarks" placeholder="Add an informative remark (if any)"></textarea>
                        </div>
                </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp; Approve</button>
                        </div>
                        </form>
                        ';
                echo json_encode($response);
                // exit; 
        }

        public function rejectDetails()
        {
                $bkid=$this->input->post('id');
                $data=$this->fetch->getBookingDetails($bkid);
                $response='
                        <div class="row mb-3">
                                <div class="col-md-6">
                                        <div class="col-md-12 mb-1"><strong>Name:</strong> '.$data['info']->fname.'</div>
                                        <div class="col-md-12 mb-1"><strong>Phone:</strong> '.$data['info']->mobile_no.'</div>
                                        <div class="col-md-12 mb-1"><strong>Pin Code:</strong> '.$data['info']->pin_code.'</div>
                                        <div class="col-md-12 mb-1"><strong>Address:</strong> '.$data['info']->address.'</div>
                                        <div class="col-md-12 mb-1"><strong>Booked on:</strong> '.date('d-M-Y',strtotime($data['info']->created)).'</div>
                                        <div class="col-md-12"><strong>Service needed:</strong> '.$data['info']->name.'</div>
                                </div>
                                <div class="col-md-6">
                                        <div class="col-md-12 mb-1"><strong>Schedule date:</strong> <mark>'.date('d-M-Y',strtotime($data['info']->schedule_date)).'</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Schedule time:</strong> <mark> '.date('g:i a',strtotime($data['info']->schedule_time)).'</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Min bill amt.:</strong> <mark> ₹'.$data['info']->amt.'/-</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Customer remarks:</strong> '.$data['info']->customer_remarks.'</div>
                                        <div class="col-md-12 mb-1"><strong>Status:</strong> '.$data['info']->status.'</div>
                                </div>
                        </div>
                        <div class="row mb-3">
                        <table class="table table-bordered table-striped">
                                <tr>
                                  <th>Sub services requested</th>
                                  <th>Min charges *</th>
                                </tr>
                ';
                foreach($data['sub_svc'] as $sub){
                        $response.='
                                <tr>
                                  <td>'.$sub->text.'</td>
                                   <td>'.$sub->min_charges.'</td>
                                </tr>
                        ';
                }
                $response.='</table>
                        </div>
                        <form class="" method="POST" action="'.base_url().'Edit/rejectBooking/'.$bkid.'">
                        <div class="row mb-2">
                                <label>Enter your remarks:</label>
                                <textarea class="form-control" name="admin_remarks" placeholder="Add an informative remark (if any)"></textarea>
                        </div>
                </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp; Reject</button>
                        </div>
                        </form>
                        ';
                echo json_encode($response);
                // exit; 
        }

        public function bookDetails()
        {
                $bkid=$this->input->post('id');
                $data=$this->fetch->getBookingDetails($bkid);
                $response='
                        <div class="row mb-3">
                                <div class="col-md-6">
                                        <div class="col-md-12 mb-1"><strong>Name:</strong> '.$data['info']->fname.'</div>
                                        <div class="col-md-12 mb-1"><strong>Phone:</strong> '.$data['info']->mobile_no.'</div>
                                        <div class="col-md-12 mb-1"><strong>Pin Code:</strong> '.$data['info']->pin_code.'</div>
                                        <div class="col-md-12 mb-1"><strong>Address:</strong> '.$data['info']->address.'</div>
                                        <div class="col-md-12 mb-1"><strong>Booked on:</strong> '.date('d-M-Y',strtotime($data['info']->created)).'</div>
                                        <div class="col-md-12"><strong>Service needed:</strong> '.$data['info']->name.'</div>
                                </div>
                                <div class="col-md-6">
                                        <div class="col-md-12 mb-1"><strong>Schedule date:</strong> <mark>'.date('d-M-Y',strtotime($data['info']->schedule_date)).'</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Schedule time:</strong> <mark> '.date('g:i a',strtotime($data['info']->schedule_time)).'</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Min bill amt.:</strong> <mark> ₹'.$data['info']->amt.'/-</mark></div>
                                        <div class="col-md-12 mb-1"><strong>Customer remarks:</strong> '.$data['info']->customer_remarks.'</div>
                                        <div class="col-md-12 mb-1"><strong>Status:</strong> '.$data['info']->status.'</div>
                                </div>
                        </div>
                        <div class="row mb-3">
                        <table class="table table-bordered table-striped">
                                <tr>
                                  <th>Sub services requested</th>
                                  <th>Min charges *</th>
                                </tr>
                ';
                foreach($data['sub_svc'] as $sub){
                        $response.='
                                <tr>
                                  <td>'.$sub->text.'</td>
                                   <td>'.$sub->min_charges.'</td>
                                </tr>
                        ';
                }
                $response.='</table>
                        </div>
                        <div class="row mb-2">
                                <div class="col-md-12 mb-1"><strong>Admin remarks:</strong> '.$data['info']->admin_remarks.'</div>
                        </div>
                </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        ';
                echo json_encode($response);
                // exit; 
        }


        // -------------------------  ROOT CODE --------------------

        public function webProfile()
        {
                $profile=$this->fetch->getWebProfile();
                $this->load->view('admin/adminheader', ['title'=>'Web profile','profile' => $profile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/webProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function adminProfile()
        {
                $admProfile=$this->fetch->getAdminProfile();
                $this->load->view('admin/adminheader', ['title'=>'Admin profile','admProfile' => $admProfile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function rootLogin()
        {
                if($this->input->post('p')===ROOT_PWD){
                        $this->session->set_userdata(['root' => 'root']);  
                        redirect('Admin/rootFileUpload');
                }
                else{
                        redirect('Admin');
                }
        }

        public function rootFileUpload()
        {
                $this->load->view('admin/adminheader',['title'=>'Root Upload']); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/rootUpload'); 
                $this->load->view('admin/adminfooter');  
        }

        public function processRootUpload()
        {
                if($_FILES['file']['name']!=null){
                        $path = $this->input->post('path');
                        $initialize = array(
                                "upload_path" => $path,
                                "allowed_types" => "*",
                                "overwrite" => true
                        );
                        $this->load->library('upload', $initialize);
                        if (!$this->upload->do_upload('file')) {
                                $this->session->set_flashdata('failed',trim(strip_tags($this->upload->display_errors())) );
                                redirect('Admin/rootFileUpload');
                        }
                        else {
                                $this->session->set_flashdata('success','Uploaded !' );
                                redirect('Admin/rootFileUpload');
                        } 
                }
                else{
                        $this->session->set_flashdata('failed','No file selected !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function processRootNewFolder()
        {
                $path = $this->input->post('path');
                $folder = $this->input->post('folder');
                if(!file_exists($path.$folder)){
                    if(mkdir($path.$folder)){
                        $this->session->set_flashdata('success','Created !');
                        redirect('Admin/rootFileUpload');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                    }
                }
                else{
                        $this->session->set_flashdata('failed','Already exists');
                        redirect('Admin/rootFileUpload');
                }
        }
        
        public function Extract()
        {
                if(!empty($_FILES['file']['name'])){ 
                     $config['upload_path'] = './'; 
                     $config['allowed_types'] = 'zip'; 
           
                     $this->load->library('upload',$config); 
                     if($this->upload->do_upload('file')){ 
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name'];
           
                        $zip = new ZipArchive;
                        $res = $zip->open("./".$filename);
                        if ($res === TRUE) {
                          $extractpath = $this->input->post('path');
                          $zip->extractTo($extractpath);
                          $zip->close();
                          unlink('./'.$filename);
                          $this->session->set_flashdata('success','Upload & Extract successful.');
                          redirect('Admin/rootFileUpload');
                        }
                        else {
                          $this->session->set_flashdata('failed','Failed to extract !');
                          redirect('Admin/rootFileUpload');
                        }
                        
                    }
                    else{ 
                       $this->session->set_flashdata('failed','Failed to upload !');
                       redirect('Admin/rootFileUpload');
                    } 
                }
                else{ 
                    $this->session->set_flashdata('failed','No file selected for uploading!');
                    redirect('Admin/rootFileUpload');
                } 
           
        }

        public function rootDownload()
        {
                $path=$this->input->post('path');
                $dirPath=$this->input->post('dirPath');
                if($path!=''){
                        $path=$this->input->post('path');
                        $this->load->helper('download');
                        if(force_download($path, NULL)){
                                $this->session->set_flashdata('success','File download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                if($dirPath!=''){
                        $this->load->library('zip');
                        $filename = "backupz.zip";
                        $this->zip->read_dir($dirPath);
                        $this->zip->archive($filename);
                        if($this->zip->download($filename)){
                                $this->session->set_flashdata('success','Zip download initiated !');
                                redirect('Admin/rootFileUpload');
                        }
                        else{
                                $this->session->set_flashdata('failed','Error !');
                                redirect('Admin/rootFileUpload');
                        }
                }
                $this->session->set_flashdata('failed','No path given !');
                redirect('Admin/rootFileUpload');
        }

        public function dbDownload()
        {
                $this->load->dbutil();
                $prefs = array(     
                        'format'      => 'zip',             
                        'filename'    => 'my_db_backup.sql'
                );
                $backup =& $this->dbutil->backup($prefs); 
                $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
                // $save = 'assets/'.$db_name;
                $this->load->helper('file');
                write_file($save, $backup); 
                $this->load->helper('download');
                force_download($db_name, $backup); 
        }

        public function delBackupz(){
                if(unlink('backupz.zip')){
                        $this->session->set_flashdata('success','Backupz.zip deleted !');
                        redirect('Admin/rootFileUpload');
                }
                else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/rootFileUpload');
                }
        }

        public function rootUploadOff()
        {
                $this->session->unset_userdata(['root']);
                redirect('Admin');
        }


}
