<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Kaarigar online - your online service partner | <?=isset($title)?$title:''?></title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <meta name="theme-color" content="#0F76B7">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700%7CSource+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?=base_url()?>assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/fakeLoader.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/jquery.timepicker.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/magnific-popup.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/nice-select.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/simsCheckbox.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/responsive-style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/colors/color-10.css" rel="stylesheet" id="changeColorScheme">
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- Preloader Start -->
    <!-- <div class="preloader bg--color-theme"></div> -->
    <!-- Preloader End -->
    
    
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-dark">
                <div class="container">
                    <!-- Header Topbar Links Start -->
                    <ul class="nav links float--left">
                        <li class="hidden-xxs"><a href="#"><i class="fa fa-question"></i>&nbsp; FAQ</a></li>
                        <li class="hidden-xxs"><a href="#"><i class="fa fa-support"></i>&nbsp; Support</a></li>
                        <li class="hidden-xxs"><a href="login.html"><i class="fa fa-user"></i>&nbsp; Login</a></li>
                        <li class="show-xxs top-bar-call"><a href="tel:+919039310833"><i class="fa fa-phone"></i>&nbsp; +919039310833</a></li>
                        <li class="loc-top-bar show-xxs"><a href="#" data-toggle="modal" data-target="#loc-modal"><i class="fa fa-map-marker"></i>&nbsp; <span id="loc">Location</span></a></li>
                        <li class="login-top-bar show-xxs"><a href="login.html"><i class="fa fa-user"></i>&nbsp; Login</a></li>
                    </ul>
                    <!-- Header Topbar Links End -->

                    <!-- Header Topbar Social Start -->
                    <ul class="nav social float--right hidden-xxs">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                    <!-- Header Topbar Social End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Top Start -->
            <div class="header--navbar-top hidden-xxs">
                <div class="container">
                    <!-- Logo Start -->
                    <div class="logo float--left">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <a href="index.html"><img src="<?=base_url()?>assets/images/logo.png" alt="Kaarigar Logo" data-rjs="2"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Logo End -->

                    <div class="float--right">
                        <!-- Header Navbar Top Info Start -->
                        <div class="header--navbar-top-info float--left">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <ul class="nav">
                                        <li>
                                            <div class="content">
                                                <p>
                                                    <a href="tel:+919039310833" class="h4">
                                                        <i class="fa fa-phone text--primary"></i> +919039310833
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content">
                                                <p> 
                                                    <a href="" class="h4" data-toggle="modal" data-target="#loc-modal">
                                                        <i class="fa fa-map-marker text--primary"></i> 
                                                        Location
                                                    </a>
                                                </p>
                                                <!-- <a href="" style="text-decoration:underline;" class="text--primary">Change location</a> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Header Navbar Top Info End -->

                        <!-- Header Navbar Top Button Start -->
                        <div class="header--navbar-top-btn float--left">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <a href="#appointment" class="btn btn-default">Book Service</a>
                                </div>
                            </div>
                        </div>
                        <!-- Header Navbar Top Button End -->
                    </div>
                </div>
            </div>
            <!-- Header Navbar Top End -->

           <!-- Header Navbar Start -->
           <nav class="header--navbar navbar" data-trigger="sticky">
            <div class="container">

                <div class="logo float--left show-xxs">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <a href="index.html"><img src="<?=base_url()?>assets/images/logo.png" alt="Kaarigar Logo" data-rjs="2"></a>
                        </div>
                    </div>
                </div>

                <div id="headerNav" class="navbar-collapse collapse float--left">
                    <!-- Header Nav Links Start -->
                    <ul class="header--nav-links nav navbar-nav font--secondary">
                        <li class="header-svc footer-nav bg--color-lightgray d-xxs-flex mb--1">
                            <a href="about.html" class="font-14" style="white-space: nowrap;">About us</a>
                            <a href="contact.html" class="font-14">Contact</a>
                            <a href="index.html" class="font-14">T&C</a>
                        </li>
                        <li class="header-svc">
                            <a href="index.html">
                                <img src="<?=base_url()?>assets/images/services-img/saw-up.png" alt="Carpenter" class="sv-img">
                                &nbsp;
                                <span>Carpenters</span>
                            </a>
                        </li>
                        <li class="header-svc">
                            <a href="index.html">
                                <img src="<?=base_url()?>assets/images/services-img/air-conditioner.png" class="sv-img">
                                &nbsp;
                                <span>AC repair</span>
                            </a>
                        </li>
                        <li class="header-svc">
                            <a href="index.html">
                                <img src="<?=base_url()?>assets/images/services-img/electricity.png" alt="Carpenter" class="sv-img">
                                &nbsp;
                                <span>Electrician</span>
                            </a>
                        </li>
                        <li class="header-svc">
                            <a href="service-details.html">
                                <img src="<?=base_url()?>assets/images/services-img/wrench.png" alt="Carpenter" class="sv-img">
                                &nbsp;
                                <span>Plumber</span>
                            </a>
                        </li>
                        <li class="header-svc">
                            <a href="index.html">
                                <img src="<?=base_url()?>assets/images/services-img/brush.png" alt="Carpenter" class="sv-img">
                                &nbsp;
                                <span>Painter</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Header Nav Links End -->
                </div>
                
                <div class="navbar-header toggler show-xxs">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

            
            </div>
        </nav>
        <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->
