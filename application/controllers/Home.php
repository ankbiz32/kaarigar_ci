<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{
		$locations=$this->fetch->getInfo('locations');
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
			$services=$this->fetch->getInfo('services');
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
		$locations=$this->fetch->getInfo('locations');
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
		$locations=$this->fetch->getInfo('locations');
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
		$locations=$this->fetch->getInfo('locations');
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
		$locations=$this->fetch->getInfo('locations');
		$services_nav=$this->fetch->getInfo('services',5);
		$web=$this->fetch->getWebProfile('webprofile');
		$bookings=$this->fetch->getInfoConds('bookings',['user_id'=>$this->session->reg->id]);
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
	}

	public function Services()
	{
		$locations=$this->fetch->getInfo('locations');
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
		$locations=$this->fetch->getInfo('locations');
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
		// var_dump($_POST);exit;
		
		$profile=$this->fetch->getInfoCondsId('user_info',['user_id'=>$this->session->reg->id]);
		redirect('checkout');
		
	}

	public function Checkout()
	{
		// var_dump($_POST);exit;
		$locations=$this->fetch->getInfo('locations');
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



	// ---------------- REF --------------------

	public function Event($id)
	{
		$event=$this->fetch->getInfoById($id,'events');
		$prods=$this->fetch->getInfoByLim('products',4);
		$services=$this->fetch->getInfoByLim('services',4);
		$social_meta='';
		if(!empty($event)){
			$social_meta='
				<meta name="og:title" content="'.$event->heading.'">
				<meta name="og:description" content="'.substr(trim(strip_tags($event->descr)),0,100).'">
				<meta name="og:image" content="'.base_url("assets/images/").$event->img_src.'">
				<meta name="og:url" content="'.base_url().'">
				<meta name="og:site_name" content="Total Agrisolutions by Ramraj services Pvt. Ltd.">

				<meta name="twitter:card" content="summary">
				<meta name="twitter:title" content="'.$event->heading.'">
				<meta name="twitter:description" content="'.substr(trim(strip_tags($event->descr)),0,100).'">
				<meta name="twitter:site" content="@'.base_url().'">
				<meta name="twitter:image" content="'.base_url("assets/images/").$event->img_src.'">

				<meta itemprop="name" content="'.$event->heading.'">
				<meta itemprop="description" content="'.substr(trim(strip_tags($event->descr)),0,100).'">
				<meta itemprop="image" content="'.base_url("assets/images/").$event->img_src.'">
			';
			}
		$states=$this->fetch->getInfo('states');
		$roles=$this->fetch->getInfo('reg_roles');
		$recents=$this->fetch->getInfoByLim('events',4);
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Event',
									'roles'=>$roles,
									'states'=>$states,
									'event'=>$event,
									'prods'=>$prods,
									'services'=>$services,
									'recents'=>$recents,
									'social_meta'=>$social_meta,
									'web'=>$web
									]);
		$this->load->view('event');
		$this->load->view('footer');
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

}
