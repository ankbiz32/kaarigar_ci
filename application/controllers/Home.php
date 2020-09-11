<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{
		// $to = "ankur.agr32@gmail.com";
		// $subject = "New enquiry from kaarigar online";
		// $txt = "Just for testing from kaarigaronline.in";
		// $headers = 'From: kaarigaronline@kaarigaronline.in' . "\r\n" .
		// 		'Reply-To: kaarigar.info@gmail.com';

		// mail($to,$subject,$txt,$headers);
		$this->load->view('landing');
	}

	public function index2()
	{
		// echo'<pre>';var_dump($_SESSION);exit;
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');

		$sliders=$this->fetch->getInfo('hero_slider');
		if(isset($this->session->loc_id)){
			$svc_ids=$this->fetch->getServicesInLoc('services_locations',['location_id'=>$this->session->loc_id]);
			foreach($svc_ids as $id){
				$svc_id[]=$id['service_id'];
			}
			$services=$this->fetch->getServicesWhereIn($svc_id);

		}else{
			$services=$this->fetch->getInfoConds('services',['is_active'=>1]);
		}
		$feedbacks=$this->fetch->getInfoByOrder('feedbacks');

		$this->load->view('header',['title'=>'Home',
								'web'=>$web,
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'sliders'=>$sliders,
								'services'=>$services,
								'feedbacks'=>$feedbacks
							]
					);
		$this->load->view('index');
		$this->load->view('footer'); 
		$this->load->view('custom_scripts'); 
	}

	public function About()
	{
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');

		$this->load->view('header',['title'=>'About us',
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'web'=>$web
						]
					);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function Contact()
	{
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		
		$this->load->view('header',['title'=>'Contact us',
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'web'=>$web
						]
					);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function Forgot()
	{
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Forgot password',
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'web'=>$web
						]
					);
		$this->load->view('forgot');
		$this->load->view('footer');
	}

	public function Profile()
	{
        $this->redirectUserNotLoggedIn();
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		$bookings=$this->fetch->getBookings($this->session->reg->id);
		// var_dump($bookings);exit;
		$profile=$this->fetch->getInfoCondsId('user_info',['user_id'=>$this->session->reg->id]);
		$this->load->view('header',['title'=>'Profile',
								'profile'=>$profile,
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'bookings'=>$bookings,
								'web'=>$web
						]
					);
		$this->load->view('profile');
		$this->load->view('footer');
		$this->load->view('custom_scripts');
	}

	public function Services()
	{
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		if(isset($this->session->loc_id)){
			$svc_ids=$this->fetch->getServicesInLoc('services_locations',['location_id'=>$this->session->loc_id]);
			foreach($svc_ids as $id){
				$svc_id[]=$id['service_id'];
			}
			$services=$this->fetch->getServicesWhereIn($svc_id);

		}else{
			$services=$this->fetch->getInfoConds('services',['is_active'=>1]);
		}
		$this->load->view('header',['title'=>'services',
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'services'=>$services,
								'web'=>$web
						]
					);
		$this->load->view('services');
		$this->load->view('footer');
	}

	public function Service_details($id)
	{
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		if(isset($this->session->loc_id)){
			$svc_ids=$this->fetch->getServicesInLoc('services_locations',['location_id'=>$this->session->loc_id]);
			foreach($svc_ids as $ids){
				$svc_id[]=$ids['service_id'];
			}
			if(in_array($id, $svc_id)){
				$avail_locs=$this->fetch->getLocationsInSvc($id);
				$service=$this->fetch->getInfoById($id,'services');
				$sub_services=$this->fetch->getInfoConds('sub_services',['service_id'=>$id, 'is_active'=>1]); 
				// echo'<pre>';var_dump($sub_services);exit;
			}else{
				redirect('services');
			}
		}
		else{
			$avail_locs=$this->fetch->getLocationsInSvc($id);
			$service=$this->fetch->getInfoCondsId('services',['id'=>$id]); 
			$sub_services=$this->fetch->getInfoConds('sub_services',['service_id'=>$id]); 
		}
		$this->load->view('header',['title'=>'service details',
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'avail_locs'=>$avail_locs,
								'service'=>$service,
								'sub_services'=>$sub_services,
								'web'=>$web
						]
					);
		$this->load->view('service-details');
		$this->load->view('footer');
	}

	public function updateProfile()
	{
        $this->redirectUserNotLoggedIn();
		$data['fname']=$this->input->post('fname');
		$data['email']=$this->input->post('email');
		$data2['pin_code']=$this->input->post('pin_code');
		$data2['address']=$this->input->post('address');
		$this->load->model('EditModel','edit');
		if($this->edit->updateInfoConds('users',['id'=>$this->session->reg->id],$data)){
			$this->session->reg->fname=$data['fname'];
			$this->session->reg->email=$data['email'];
			$this->edit->updateInfoConds('user_info',['user_id'=>$this->session->reg->id],$data2);
			$this->session->set_flashdata('success','Profile Updated !');
			redirect('profile');
		}
		else{
			$this->session->set_flashdata('failed','Error !');
			redirect('profile');
		}
	}

	public function bookService()
	{
		$res['profile']=$this->fetch->getInfoCondsId('user_info',['user_id'=>$this->session->reg->id]);
		$res['service']=$this->fetch->getInfoCondsId('services',['id'=>$this->input->post('service_id')]);
		foreach($_POST['subsvc'] as $ss){
			$res['sub_svc'][$ss]=$this->fetch->getInfoCondsId('sub_services',['id'=>$ss]);
		}
		$_SESSION['cart']=array();
		$_SESSION['cart']=$res;
		redirect('checkout');
		
	}

	public function Checkout()
	{
		// var_dump($_POST);exit;
		$locations=$this->fetch->getInfoConds('locations',['is_active'=>1]);
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Checkout',
								'locations'=>$locations,
								'services_nav'=>$services_nav,
								'web'=>$web
						]
					);
		$this->load->view('checkout');
		$this->load->view('footer');
		
	}

	public function finishBooking()
	{
		// echo'<pre>';var_dump($_SESSION['cart'],$_POST);exit;
		$data=$this->input->post();
		unset($data['email']);
		unset($data['checkoutPayment']);
		$data['service_id']=$this->session->cart['service']->id;
		$data['user_id']=$this->session->reg->id;
		$data['status']='BOOKED';
		
		$this->load->model('AddModel','add');
		$this->db->trans_start();
		$bid=$this->add->saveInfo('bookings',$data);
		if($bid){
			$data2['booking_id']=$bid;
			foreach($this->session->cart['sub_svc'] as $sub){
				$data2['sub_service_id']=$sub->id;
				$flag=$this->add->saveInfo('booking_info',$data2);
			}
		}
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata('failed','Critical error! Please try again.');
			return false;
		}
		else{
			unset($_SESSION['cart']);
			$this->session->set_flashdata("success","Booking completed. Please check the booking status under the booking history tab.");
			redirect('profile');
		}
		
	}

	public function scvCheckInLoc()
	{
		$svc_id=$this->input->post('svc_id');
		$loc_id=$this->input->post('location');
		$loc=$this->fetch->getInfoById($loc_id,'locations');
		$this->session->loc_id=$loc->id;
		$this->session->loc_area=$loc->area;
		$this->session->loc_city=$loc->city;
		$this->session->loc_state=$loc->state;
		$this->session->loc_pin_code=$loc->pin_code;
		$response=array();
		$response['area']=$loc->area;
		$response['city']=$loc->city;
		$response['state']=$loc->state;
		$response['pin_code']=$loc->pin_code;
		if($this->fetch->checkSvc($svc_id,$loc_id)>0){
			$response['error']=false;
			echo json_encode($response);
		}
		else{
			$response['error']=true;
			echo json_encode($response);
		}
	}

	public function changeLoc()
	{
		$this->session->loc_id=$_GET['location'];
		$loc=$this->fetch->getInfoById($this->session->loc_id,'locations');
		$this->session->loc_area=$loc->area;
		$this->session->loc_city=$loc->city;
		$this->session->loc_state=$loc->state;
		$this->session->loc_pin_code=$loc->pin_code;
		if(isset($_GET['return_url'])){
			redirect($_GET['return_url']);
		}
		else{
			redirect('Home');
		}
	}


	public function bookDetails()
	{
			$bkid=$this->input->post('id');
			$data=$this->fetch->getBookingDetails($bkid);
			$response='
					<div class="row mb--2">
							<div class="col-xs-6">
									<div class="col-md-12 mb--1"><strong>Name:</strong> '.$data['info']->fname.'</div>
									<div class="col-md-12 mb--1"><strong>Phone:</strong> '.$data['info']->mobile_no.'</div>
									<div class="col-md-12 mb--1"><strong>Pin Code:</strong> '.$data['info']->pin_code.'</div>
									<div class="col-md-12 mb--1"><strong>Address:</strong> '.$data['info']->address.'</div>
									<div class="col-md-12 mb--1"><strong>Booked on:</strong> '.date('d-M-Y',strtotime($data['info']->created)).'</div>
									<div class="col-md-12"><strong>Service needed:</strong> '.$data['info']->name.'</div>
							</div>
							<div class="col-xs-6">
									<div class="col-md-12 mb--1"><strong>Schedule date:</strong> <mark>'.date('d-M-Y',strtotime($data['info']->schedule_date)).'</mark></div>
									<div class="col-md-12 mb--1"><strong>Schedule time:</strong> <mark> '.date('g:i a',strtotime($data['info']->schedule_time)).'</mark></div>
									<div class="col-md-12 mb--1"><strong>Min bill amt.:</strong> <mark> ₹'.$data['info']->amt.'/-</mark></div>
									<div class="col-md-12 mb--1"><strong>Your remarks:</strong> '.$data['info']->customer_remarks.'</div>
									<div class="col-md-12 mb--1"><strong>Status:</strong> '.$data['info']->status.'</div>
							</div>
					</div>
					<div class="row mb--2 pl--1 pr--1">
					<table class="table col-md-12 table-bordered table-striped">
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
					';
			echo json_encode($response);
			// exit; 
	}

	public function Enquiry()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('message', 'Message', 'max_length[300]');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo('enquiries',$data);
			if($status){
				$this->session->set_flashdata('success','Thank you for sending us a message. We will contact you soon.' );
				redirect('contact-us');
			}
			else{
				$this->session->set_flashdata('failed','Critical error!');
				redirect('contact-us');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(trim(validation_errors())));
			redirect('contact-us');
		} 
	}

	
	public function landingEnquiry()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('message', 'Address', 'required|max_length[300]');
		$this->form_validation->set_rules('email', 'Email', 'valid_email');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo('enquiries',$data);
			if($status){
				$this->session->set_flashdata('success','Your booking enquiry has been received. We will contact you soon.' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error! Please try again after sometime or call us on 9753344220.');
				redirect('Home');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(trim(validation_errors())));
			redirect('Home');
		} 
	}

	public function landingAppl()
	{
		// $data=$this->input->post();
		// echo'<pre>';var_dump($data);exit;
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('details', 'Details', 'max_length[300]');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo('job_appl',$data);
			if($status){
				$this->session->set_flashdata('success','Your application has been received. We will contact you soon.');
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error! Please try again after sometime or call us on 9753344220.');
				redirect('Home');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(trim(validation_errors())));
			redirect('Home');
		} 
	}

}
