<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>Kaarigar online - Ab hoga har kaam pura</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?=base_url('assets/landing/')?>images/favicon.png">
    <meta name="theme-color" content="#0F76B7">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>css/bootstrap.min.css">

	<!-- ICONS -->
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>css/ilmosys-icons.css">
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>css/icons/fontawesome/css/style.css">
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>css/icons/style.css">
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>css/icons/icon2/style.css">
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>js/vendors/swipebox/css/swipebox.min.css">
    

	<!-- THEME / PLUGIN CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>js/vendors/slick/slick.css">
	<link rel="stylesheet" href="<?=base_url('assets/landing/')?>css/style.css">
    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body id="page-top"> 

<div class="body">
	<!-- HEADER -->
	<header>
		<nav class="navbar-inverse navbar-lg navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="<?=base_url()?>" class="navbar-brand brand"><img src="<?=base_url('assets/landing/')?>images/logo.png" alt="logo"></a>
				</div>

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right navbar-login">
						<li>
							<a href="tel:9753344220"> <i class="fa fa-phone"></i>&nbsp; 9753 344 220</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						
						
						 <li class="dropdown mm-menu">
							<a class="page-scroll" href="#home">Home</a>
						</li>
						
					   <li class="dropdown mm-menu">
							<a class="page-scroll" href="#reviews">Reviews</a>
						</li>
						
						<li class="dropdown mm-menu">
							<a class="page-scroll" href="#service">Services</a>
						</li>
						
						<li class="dropdown mm-menu">
							<a class="page-scroll" href="#faq">FAQ</a>
						</li>
						
						<li class="dropdown mm-menu">
							<a class="page-scroll" href="#contact">Contact</a>
						</li>
												
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- INTRO -->
	<div id="home" class="intro intro1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row center-content">
				<div class="col-sm-5 col-md-4">
					<div class="intro-form">
						<h4>Raipur's #1 Rated Kaarigars.</h4>
						<form  action="<?=base_url('Home/landingEnquiry')?>" method="POST">
							<fieldset>
								<input placeholder="Your Name" name="name" type="text" required>
								<input placeholder="10 digit mobile no." type="text" x-moz-errormessage="Enter Contact no. here"  name="phone" pattern="[6-9]{1}[0-9]{9}" oninvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" maxlength="10" title="Enter 10 digit mobile no. starting with 6,7,8, or 9" required>
								<textarea name="message" maxlength="300" placeholder="Full address" cols="30" rows="10" required></textarea>
								<input placeholder="Email (optional)" name="email" type="email">
								<button class="btn btn-block btn-lg btn-primary" type="submit">Book a kaarigar</button>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="col-sm-7 col-md-push-1">
					<h2>Book your professional <br> kaarigar now.</h2>
					<div class="row">
						<div class="col-md-10">
							<div class="intro-box">
								<span class="icon-document"></span>
								<div>
									<h4>1. Send Enquiry</h4>
									<p>You only need to send us with enquiry with basic details.</p>
								</div>
							</div>
							<div class="intro-box">
								<span class="icon-calendar"></span>
								<div>
									<h4>2. Schedule a time </h4>
									<p>We will call you to fix a schedule.</p>
								</div>
							</div>
							<div class="intro-box">
								<span class="icon-home"></span>
								<div>
									<h4>3. Let us fix your problems</h4>
									<p>Do expect a safety first service.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ELEMENTS-CLIENTS -->
	<div class="elements-content">
		<h3>अब होगा हर काम पूरा !</h3>
		<div class="img-container">
			<img src="<?=base_url('assets/landing/images/logo-man.png')?>" alt="Mascot">
		</div>
	</div>
	
	<!-- TESTIMONIALS -->
	<div id="reviews" class="testimonials-white">
    
    <div class="container">
	<div class="about-inline text-center">
        <p>- REVIEWS  -</p>
			<h3>Read what our past customers said  <br> about our services.  </h3>
	</div>
    
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="quote3">
						<div>
                        	<i class="icon2-Quote"></i>
							<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live."</p>
							<span class="author">- Jerry Doe -</span> <br />
                            <span class="author-job">Web Designer @abc</span>
						</div>
						<div>
                        	<i class="icon2-Quote"></i>
							<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live."</p>
                            <span class="author">- Mark Walv -</span> <br />
                            <span class="author-job">Product Designer @xyz</span>
						</div>
						<div>
                        	<i class="icon2-Quote"></i>
							<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live."</p>
                             <span class="author">- Jack Doe -</span> <br />
                            <span class="author-job">Front End Designer @abc</span>
						</div>
						<div>
                        	<i class="icon2-Quote"></i>
							<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live."</p>
                             <span class="author">- Willsam Doe -</span> <br />
                            <span class="author-job">Back End Developer @xyz</span>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

	<!-- TESTIMONIALS -->
    
	 <!-- PARALLAX -->
	<section class="parallax-content parallax1 text-center" data-stellar-background-ratio="0.4">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h4>200+ customers already use Kaarigar Online.</h4>
				</div>
				<div class="col-md-4">
					<a href="tel:9753344220" class="btn btn-lg btn-primary"><i class="fa fa-phone fa-lg"></i>&nbsp;Call now</a>
				</div>
			</div>
        </div>
	</section>
    
	
    <!-- ABOUT -->
    <div id="service" class="container">
	<div class="about-inline text-center">
		<div class="container">
        <p>- WHAT WE DO  -</p>
			<h3>Check out some of our professional services! </h3>
		</div>
	</div>
    
	<!-- INFO CONTENT -->
	<div class="info-content">
		<div class="container">
			<div class="row center-content">
				<div class="col-md-4">
                <h3>Professional Kaarigars for</h3>
					<ul class="list">
						<li><i class="icon-check"></i> Waterproofing services</li>
						<li><i class="icon-check"></i> House painting solution</li>
						<li><i class="icon-check"></i> Plumbing solutions</li>
						<li><i class="icon-check"></i> Interior decoration services</li>
						<li><i class="icon-check"></i> AC servicing</li>
						<li><i class="icon-check"></i> and many more...</li>
					</ul>
					<div class="space30"></div>
					<a href="tel:9753344220" class="btn btn-lg btn-primary"><i class="fa fa-phone"></i>&nbsp;Call now</a>
				</div>
				<div class="col-md-8 text-center">
					<img src="<?=base_url('assets/landing/')?>images/services/1.jpg" class="pull-right img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
	
	
</div>

	
    <div class="space100"></div>
   
    
     <!-- SERVICES -->
	 <div class=" bg-light">
    <div class="container">
	<div class="about-inline text-center">
		<div class="container">
        <p>- reason -</p>
			<h3>Reasons to love Kaarigar online. </h3>
			<p>We're different from your typical home service company. We're out to create magic. The goal is to WOW you with outstanding treatment.</p>
		</div>
	</div>
    
    <div class="service3 icon-box-square">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="text-center">
						<span><i class="fa fa-1x fa-magic"></i></span>
						<div class="services-content">
							<h2>Trusted & Vetted Kaarigar</h2>
							<p>Here you'll only find the best. All our kaarigars are carefully vetted by us & we'd be happy to have clean our own homes.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-center">
						<span><i class="fa fa-1x fa-codepen"></i></span>
						<div class="services-content">
							<h2>Customer Recommended</h2>
							<p>kaarigars are continuously reviewed by our customers. Each and every kaarigar is to maintain a high standard to work with us.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-center">
						<span><i class="fa fa-1x fa-delicious"></i></span>
						<div class="services-content">
							<h2>Commitment to Trust & Safety</h2>
							<p>Your home is your sanctuary. At Kaarigar Online we go above and beyond to create a more trusted and reliable experience.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        
	 </div>
   </div>
 </div>
</div>
 
 <!-- INFO CONTENT -->
	<div class="info-content2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Honesty is the best policy.</h3>
                    <div class="space10"></div>
					<p>We communicate honestly. No hidden fees, no surprises, no upsells! Only honest work and trustworthy staff.</p>
					
				</div>
			</div>
		</div>
	</div>

	<!-- FREQUENTLY ASKED QUESTIONS -->
    <div class="container" id="faq">
	<div class="about-inline text-center">
        <p>- FREQUENTLY ASKED QUESTIONS  -</p>
			<h3>Got questions? We’ve got answers. <br> Send us email to kaarigar.info@gmail.com </h3>
		</div>
	</div>

	<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> Are your kaarigars qualified?</h4>
					<p>Absolutely! We only bring in professionals who have been recommended and certified by experts. We conduct interviews, check referrals, licenses, and do background checks on each and every kaarigar.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> What happens if the Kaarigar damages anything?</h4>
					<p>In the unlikely event of our team damaging something, you can email us at kaarigar.info@gmail.com <br> OR give us a call @ 9753344220</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> What happens in case the requested job takes more time than expected?</h4>
					<p>We understand that your time is valuable and are always striving to limit the time spent by kaarigars at your home. However the kaarigars are trained to update you if the job might take longer than expected. Please do expect a buffer of half an hour more or less than the stated time to complete the task.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> Does someone have to be home when the kaarigar comes?</h4>
					<p>Yes, it is advisable for you to be around when the job is getting done. You are requested to take care of your personal belongings or valuables in the presence of our kaarigars. Kaarigar online will not be liable for any damage or theft arising in case of failure to do so.</p>
                    </div>
                </div>
                
			</div>
		</div>		

		
     <div class="space100"></div>
	
    <!-- PARALLAX -->
	<section class="parallax-content parallax2 text-center" data-stellar-background-ratio="0.4">
		<div class="overlay"></div>
			<div class="container">
       			<div class="row">
				<div class="col-md-12 tc text-center ">
					<h4>Join Kaarigar online as a Professional!</h4>
					<p>Become a kaarigar . We offer great staff incentives, excellent industry opportunities and an unparalleled work culture.</p>
           			 <a href="javascript:;" data-toggle="modal" data-target="#formKaarigar" class="btn btn-lg btn-primary">APPLY AS A KAARIGAR </a>
            		<p>or email us: kaarigar.info@gmail.com</p>
				</div>
       		 </div>
        </div>
	</section>
   

   <!-- CONTACT US -->
    <div class="container" id="contact">
	<div class="about-inline text-center">
        <p>- CONTACT US -</p>
			<h3>Customer satisfaction is our top priority,  <br>  Don’t hesitate to contact us </h3>
		</div>
	</div>
	
	<!-- CONTACT INFO -->
	<div id="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="c-info">
						<i class="icon-phone"></i>
						<h5><b>Call Us</b></h5>
						<a href="tel:9753344220">9753 344 220</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="c-info">
						<i class="icon-envelope"></i>
						<h5><b>Email</b></h5>
						<p><a href="mailto:kaarigar.info@gmail.com">kaarigar.info@gmail.com</a></p>
					</div>
				</div>

				<!-- <div class="col-lg-3 col-sm-6">
					<div class="c-info">
						<i class="icon-map-marker"></i>
						<h5><b>Address</b></h5>
						<p>72, Wallstreet, NY 20110</p>
					</div>
				</div> -->
                
                <div class="col-lg-4 col-sm-6">
					<div class="c-info">
						<i class="icon-lifesaver"></i>
						<h5><b>WEBSITE</b></h5>
						<p><a href="" > www.kaarigaronline.in</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade " id="privacy" tabindex="-1" role="dialog" aria-labelledby="termsLabel">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content px-2">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Privacy policy :</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<p>
						At Kaarigar Online, accessible from https://kaarigaronline.in/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Kaarigar Online and how we use it.
					</p>

					<p>
						If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
					</p>

					<p>
						This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Kaarigar Online. This policy is not applicable to any information collected offline or via channels other than this website. 
					</p>

					<h4 class="font-weight-bold mt-3 mb-1">
						Consent
					</h4>
					<p>
						By using our website, you hereby consent to our Privacy Policy and agree to its terms.
					</p>

					<h4 class="font-weight-bold mt-3 mb-1">
						Information we collect
					</h4>
					<p>
						The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.
					</p>

					<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
					
					<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

					<h4 class="font-weight-bold mt-3 mb-1">
						How we use your information
					</h4>
					<p>
						We use the information we collect in various ways, including to:
					</p>

					<p>Provide, operate, and maintain our webste
					Improve, personalize, and expand our webste
					Understand and analyze how you use our webste
					Develop new products, services, features, and functionality
					Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes
					Send you emails
					Find and prevent fraud
					Log Files
					Kaarigar Online follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

					<h4 class="font-weight-bold mt-3 mb-1">
						Cookies and Web Beacons
					</h4>
					<p>
						Like any other website, Kaarigar Online uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.
					</p>

					<p>
						For more general information on cookies, please read "What Are Cookies".
					</p>

					<h4 class="font-weight-bold mt-3 mb-1">
						Advertising Partners Privacy Policies
					</h4>
					<p>
						You may consult this list to find the Privacy Policy for each of the advertising partners of Kaarigar Online.
					</p>

					<p>
						Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Kaarigar Online, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.
					</p>

					<p>
						Note that Kaarigar Online has no access to or control over these cookies that are used by third-party advertisers.
					</p>

					<h4 class="font-weight-bold mt-3 mb-1">
						Third Party Privacy Policies
					</h4>
					<p>
						Kaarigar Online's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.
					</p>

					<p>
						You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.
					</p>

					<h4 class="font-weight-bold mt-3 mb-1">
						CCPA Privacy Rights (Do Not Sell My Personal Information)
					</h4>
					<p>
						Under the CCPA, among other rights, California consumers have the right to:
					</p>

					<p>
						Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.
					</p>

					<p>
						Request that a business delete any personal data about the consumer that a business has collected.
					</p>

					<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>

					<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

					<h4 class="font-weight-bold mt-3 mb-1">GDPR Data Protection Rights</h4>
					<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>

					<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>

					<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>

					<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>

					<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>

					<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>

					<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>

					<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

					<h4 class="font-weight-bold mt-3 mb-1">Children's Information</h4>
					<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

					<p>Kaarigar Online does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
				</div>
				<div class="modal-footer pt-0">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	<!-- FOOTER -->
	<footer class="footer2" id="footer2">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="margin-top:-30px">
					<a href="<?=base_url()?>" class="footer-logo"><img src="<?=base_url('assets/landing/')?>images/logo.png" alt="logo"></a>
					<p>
						Kaarigar Online is a home services provider platform in Raipur. The platform helps customers book reliable home services like  cleaning, plumbing, carpentry, appliance repair, painting etc.
					</p>
				</div>

				<div class="col-md-1">
				</div>

				<div class="col-md-2 footerP">
				<h5>RELATED LINKS</h5>
				<ul>
                    <li><a href="#service"><p>Services</p></a></li>
					<li><a href="#contact"><p>Contact Us</p></a></li>
                    <li><a href="#"><p>Book kaarigar</p></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#privacy"><p>Privacy policy</p></a></li>
				</ul>
				</div>
                
                <div class="col-md-3 footerP">
					<h5>CONTACT INFO</h5><ul>
					<li><a href="tel:9753344220"><p><i class="fa fa-phone"></i>&nbsp; 9753344220</p></a></li>
					<li><a href="mailto:kaarigar.info@gmail.com"><p><i class="fa fa-envelope"></i>&nbsp; kaarigar.info@gmail.com</p></a></li>
				</div>

				<div class="col-md-2 socialLinks">
               	 <h5>SOCIAL LINKS :</h5>
					<div class="footer-social space30">
						<a href="https://www.facebook.com/hellokaarigar" target="_blank" class="fa fa-facebook"></a> &nbsp;
						<a href="https://www.instagram.com/hellokaarigar" target="_blank" class="fa fa-instagram"></a> &nbsp;
						<a href="https://api.whatsapp.com/send?phone=919753344220&amp;text=Hi Kaarigar Online. I need your services. Please assist me on this." target="_blank" class="fa fa-whatsapp"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- COPYRIGHT -->
	<div class="footer-copy">
		<div class="container">
			&copy; 2020. Kaarigar online. All rights reserved.
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formKaarigar" tabindex="-1" role="dialog" aria-labelledby="forn" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title" style="float:left">Fill in your details to apply as a kaarigar:</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form action="<?=base_url('Home/landingAppl')?>" method="POST">
		<div class="modal-body">
				<div class="form-group">
					<label for="name" class="col-form-label">Full name:</label>
					<input type="text" class="form-control" name="name" id="name" required>
				</div>
				<div class="form-group">
					<label for="phone" class="col-form-label">Mobile no. :</label>
					<input class="form-control" placeholder="10 digit mobile no." type="text" x-moz-errormessage="Enter Contact no. here"  name="phone" pattern="[6-9]{1}[0-9]{9}" oninvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" maxlength="10" title="Enter 10 digit mobile no. starting with 6,7,8, or 9" required>
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Additional details:</label>
					<textarea placeholder="For what service are you appying for?" maxlength="300" class="form-control" name="details" id="message-text"></textarea>
				</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-primary">Apply</button>
		</div>
		</form>
	  </div>
	</div>
  </div>


<!-- JAVASCRIPT =============================-->
<script src="<?=base_url('assets/landing/')?>js/jquery.js"></script>
<script src="<?=base_url('assets/landing/')?>js/bootstrap.min.js"></script>
<script src="<?=base_url('assets/landing/')?>js/vendors/slick/slick.min.js"></script>
<script src="<?=base_url('assets/landing/')?>js/vendors/jquery.easing.min.js"></script>
<script src="<?=base_url('assets/landing/')?>js/vendors/stellar.js"></script>
<script src="<?=base_url('assets/landing/')?>js/vendors/isotope/isotope.pkgd.js"></script>
<script src="<?=base_url('assets/landing/')?>js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="<?=base_url('assets/landing/')?>js/main.js"></script>
<script src="<?=base_url('assets/landing/')?>js/vendors/mc/jquery.ketchup.all.min.js"></script>
<script src="<?=base_url('assets/landing/')?>js/vendors/mc/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

	//  Sweet alert for normal response
	$(document).ready(function(){
		const Toast = Swal.mixin({
			toast: false,
			position: 'center',
			showConfirmButton: false,
			timer: 6000
		});

		<?php if($this->session->flashdata('success') || $message = $this->session->flashdata('failed')):
			$class = $this->session->flashdata('success') ? 'success' : 'error';
		?>
			
			Toast.fire({
				icon: '<?=$class?>',
				title: '<?= $this->session->flashdata('success'); ?>
						<?= $this->session->flashdata('failed'); ?>'
			});
		<?php 
			endif;
		?>
	});

</script>

</body>

</html>


