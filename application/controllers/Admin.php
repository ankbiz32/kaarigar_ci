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
                $fr=$this->fetch->getInfo('farmer_reg');
                $this->load->view('admin/adminheader',['title'=>'Farmer Reg','fr' => $fr]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/dashboard'); 
                $this->load->view('admin/adminfooter');  
        }
        public function PartnerReg()
        {
                $pr=$this->fetch->getRegInfo();
                $this->load->view('admin/adminheader',['title'=>'Partner Reg','pr' => $pr]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/partner_reg'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Hero_sliders()
        {
                $data=$this->fetch->getInfo('hero_slider');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/sliders'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Roles()
        {
                $roles=$this->fetch->getInfo('reg_roles');
                $this->load->view('admin/adminheader',['title'=>'Roles','data'=>$roles]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/roles'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Events()
        {
                $data=$this->fetch->getInfo('events');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/events'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Feedbacks()
        {
                $data=$this->fetch->getInfo('feedbacks');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/feedbacks'); 
                $this->load->view('admin/adminfooter');  
        }

        
        public function Services()
        {
                $data=$this->fetch->getInfoByOrder('services');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/services'); 
                $this->load->view('admin/adminfooter');  
        }
        
        public function Products()
        {
                $data=$this->fetch->getInfoByOrder('products');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/products'); 
                $this->load->view('admin/adminfooter');  
        }
        
        public function Schemes()
        {
                $data=$this->fetch->getInfoByOrder('schemes');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/schemes'); 
                $this->load->view('admin/adminfooter');  
        }
        
        public function Projects()
        {
                $data=$this->fetch->getInfoByOrder('projects');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/projects'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Gallery()
        {
                $data=$this->fetch->getInfoByOrder('gallery');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/gallery'); 
                $this->load->view('admin/adminfooter');  
        }

        public function editableImages()
        {
                $this->load->view('admin/adminheader'); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/header_images'); 
                $this->load->view('admin/adminfooter');  
        }

        public function webProfile()
        {
                $profile=$this->fetch->getWebProfile();
                $this->load->view('admin/adminheader', ['profile' => $profile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/webProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function adminProfile()
        {
                $admProfile=$this->fetch->getAdminProfile();
                $this->load->view('admin/adminheader', ['admProfile' => $admProfile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function RegDetails()
        {
                $data=$this->fetch->getInfoById($this->input->post('id'),'farmer_reg');
                $response='
                        <div class="row mb-3 px-2">
                                <div class="col-md-6"><strong>Name:</strong> '.$data->name.'</div>
                                <div class="col-md-6"><strong>Phone:</strong> '.$data->phone.'</div>
                                <div class="col-md-6"><strong>City:</strong> '.$data->city.'</div>
                                <div class="col-md-6"><strong>Address:</strong> '.$data->address.'</div>
                        </div>
                        <div class="row mb-3 bg-light py-3 px-2">
                                <div class="col-md-6"><strong>Occupation:</strong> '.$data->occupation.'</div>
                                <div class="col-md-6"><strong>Capacity:</strong> '.$data->capacity.'</div>
                                <div class="col-md-6"><strong>Land:</strong> '.$data->land.'</div>
                        </div>
                        <div class="row px-2">
                                <div class="col-md-6"><strong>Soil:</strong> '.$data->soil.'</div>
                                <div class="col-md-6"><strong>Source:</strong> '.$data->source.'</div>
                                <div class="col-md-6"><strong>Products:</strong> '.$data->products.'</div>
                                <div class="col-md-6"><strong>Level:</strong> '.$data->level.'</div>
                        </div>
                ';
                echo $response;
                exit; 
        }

        public function pRegDetails()
        {
                $data=$this->fetch->getRegInfoById($this->input->post('id'));
                $response='
                        <div class="row mb-3 bg-light py-3 px-2">
                                <div class="col-md-8"><strong>Reg type:</strong><br>'.$data->role.'</div>
                                <div class="col-md-4"><strong>Date:</strong><br>'.date('d-m-Y',strtotime($data->date)).'</div>
                        </div>  
                        <div class="row mb-3">
                                <div class="col-md-4"><strong>Name:</strong><br>'.$data->pname.'</div>
                                <div class="col-md-4"><strong>Contact:</strong><br>'.$data->phone.'</div>
                                <div class="col-md-4"><strong>E-mail:</strong><br>'.$data->email.'</div>
                        </div>  
                        <div class="row mb-3">
                                <div class="col-md-4"><strong>State:</strong><br>'.$data->state_name.'</div>
                                <div class="col-md-4"><strong>City:</strong><br>'.$data->name.'</div>
                                <div class="col-md-4"><strong>Pin code:</strong><br>'.$data->pin.'</div>
                        </div>  
                        <div class="row mb-3">
                                <div class="col-md-4"><strong>Address:</strong><br>'.$data->address.'</div>
                        </div>  
                        <div class="row mb-3 bg-light py-3 px-2">
                                <div class="col-md-4"><strong>Firm name:</strong><br>'.$data->firm_name.'</div>
                                <div class="col-md-4"><strong>Firm address:</strong><br>'.$data->firm_address.'</div>
                        </div>  
                                <div class="row mb-3">
                                <div class="col-md-6"><strong>Remarks:</strong><br>'.$data->remarks.'</div>
                        </div>  
                ';
                echo $response;
                exit; 
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
