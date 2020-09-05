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
					<h2>Book your professional <br> kaarigar in sec.</h2>
					<div class="row">
						<div class="col-md-10">
							<div class="intro-box">
								<span class="icon-calendar"></span>
								<div>
									<h4>1. Book a Cleaning</h4>
									<p>Lorem ipsum dolor sit amet consec tetur elit amet voluptas accusamus dolorum veritatis ea odio dolor emque.</p>
								</div>
							</div>
							<div class="intro-box">
								<span class="icon-lock"></span>
								<div>
									<h4>2. Confirm Booking </h4>
									<p>Lorem ipsum dolor sit amet consec tetur elit amet voluptas accusamus dolorum veritatis ea odio dolor emque.</p>
								</div>
							</div>
							<div class="intro-box">
								<span class="icon-home"></span>
								<div>
									<h4>3. We’ll Clean it</h4>
									<p>Lorem ipsum dolor sit amet consec tetur elit amet voluptas accusamus dolorum veritatis ea odio dolor emque.</p>
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
			<div class="container">
				<div class="row">
					<ul class="clients no-padding text-center">
						<li><img src="<?=base_url('assets/landing/')?>images/clients/1.png" class="img-responsive center-block" alt=""/></li>
						<li><img src="<?=base_url('assets/landing/')?>images/clients/2.png" class="img-responsive center-block" alt=""/></li>
						<li><img src="<?=base_url('assets/landing/')?>images/clients/3.png" class="img-responsive center-block" alt=""/></li>
						<li><img src="<?=base_url('assets/landing/')?>images/clients/4.png" class="img-responsive center-block" alt=""/></li>
						<li><img src="<?=base_url('assets/landing/')?>images/clients/5.png" class="img-responsive center-block" alt=""/></li>
					</ul>
				</div>
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
					<a href="tel:9753344220" class="btn btn-lg btn-primary"><i class="fa fa-phone"></i>&nbsp;9753 344 220</a>
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
					<a href="tel:9753344220" class="btn btn-lg btn-primary"><i class="fa fa-phone"></i>&nbsp;9753 344 220</a>
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
			<h3>Got questions? We’ve got answers. Send us email to hello@kaarigaronline.in </h3>
		</div>
	</div>

	<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> What is FAQ?</h4>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> What is FAQ?</h4>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> What is FAQ?</h4>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                	<div class="faq">
					<h4> <span>*</span> What is FAQ?</h4>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.</p>
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
            		<p>or email us: hello@kaarigaronline.in</p>
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
						<p><a href="mailto:hello@kaarigaronline.in">hello@kaarigaronline.in</a></p>
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
				</ul>
				</div>
                
                <div class="col-md-3 footerP">
					<h5>CONTACT INFO</h5><ul>
					<li><a href="tel:9753344220"><p><i class="fa fa-phone"></i>&nbsp; 9753344220</p></a></li>
					<li><a href="mailto:hello@kaarigaronline.in"><p><i class="fa fa-envelope"></i>&nbsp; hello@kaarigaronline.in</p></a></li>
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


