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
		$services=$this->fetch->getInfo('services');
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
	}

	public function About()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'About us',
								'web'=>$web
						]
					);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function Contact()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Contact us',
								'web'=>$web
						]
					);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function Forgot()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Forgot password',
								'web'=>$web
						]
					);
		$this->load->view('forgot');
		$this->load->view('footer');
	}

	public function Login()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Login',
								'web'=>$web
						]
					);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function Register()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Register',
								'web'=>$web
						]
					);
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function Profile()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'Profile',
								'web'=>$web
						]
					);
		$this->load->view('profile');
		$this->load->view('footer');
	}

	public function Services()
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'services',
								'web'=>$web
						]
					);
		$this->load->view('services');
		$this->load->view('footer');
	}

	public function Service_details($id)
	{
		$web=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',['title'=>'service details',
								'web'=>$web
						]
					);
		$this->load->view('service-details');
		$this->load->view('footer');
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

	public function FarmerReg()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
		if($this->form_validation->run() == true){
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo($data, 'farmer_reg');
			if($status){
				$this->session->set_flashdata('success','Thank you for registering ! We will contact you soon.' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error !');
				redirect('Home');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(trim(validation_errors())));
			redirect('Home');
		} 
	}

}
