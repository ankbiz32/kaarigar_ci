
        <!-- Banner Section Start -->
        <div id="banner" class="banner--section pd--80-0">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true">
                <!-- Banner Item Start -->
                <?php foreach($sliders as $slider){?>
                    <div class="banner--item" data-bg-img="<?=base_url()?>assets/images/banner-img/<?=$slider->img_src?>">
                        <div class="vc--parent">
                            <div class="vc--child">
                                <div class="container">
                                    <div class="row">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content col-md-8">
                                            <h1><?=$slider->heading?></h1>
                
                                            <p><?=$slider->descr?></p>
                
                                            <a href="<?=base_url('about')?>" class="btn btn-default">Learn More</a>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->

            <?php if(!isset($this->session->reg)) {?>
            <div class="banner--form register">
                <div class="containers">
                    <div class="row">
                        <div class="">
                        <form id="reg_form" class="reg-form" onSubmit="return false">
                            <h3 class="text-center h4">Register to book your service</h3>
                            <hr>
                            <div class="form-block">
                                <div class="form-group">
                                    <input type="text" class="form-control required" id="name" name="name" placeholder="Your full name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control digits required" maxlength="10" minlength="10" id="mobile_no" name="mobile_no" placeholder="10 digit mobile no." required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control digits required" maxlength="6" minlength="6" id="pin_code" name="pin_code" placeholder="Pin code of your address" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="address"  class="form-control required" rows="1" style="resize: none;" placeholder="Your full address"></textarea>
                                </div>
                                <button type="button" id="regSubmit" class="btn btn-default">Register</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- Banner Section End -->

        <!-- Appointment Section Start -->
        <div id="appointment" class="appointment--section pd--100-0-40">
            <div class="container">
                <div class="section--title mb--3">
                    <h2 class="h2">Which service do you need?</h2>
                </div>
                <div class="services">
                    <?php foreach($services as $service){ if($service->is_active==1){?>
                        <a href="<?=base_url('service/').$service->id.'/'.$service->slug?>" class="service">
                            <img src="<?=base_url()?>assets/images/services-img/<?=$service->icon_src?>" alt="<?=$service->name?>" class="sv-img">
                            <h4><?=$service->name?></h4>
                        </a>
                    <?php } } ?>
                </div>
                <div class="section--footer text-center">
                    <a href="<?=base_url('services')?>" class="btn btn-default">View All Services</a>
                </div>
                <!-- Section Footer End -->
            </div>
        </div>
        <!-- Appointment Section End -->

        <!-- Services Section Start -->
        <div class="services--section pd--100-0 bg--color-lightgray">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">How it works ?</h2>

                    <p>Follow these steps to book your service</p>
                </div>
                <!-- Section Title End -->

                <div class="row text-center">
                    <!-- Service Image Start -->
                    <div class="service--img col-md-4 col-sm-8">
                        <div class="service--img-inner" data-bg-img="<?=base_url()?>assets/images/services-img/service-img-bg.png">
                            <!-- Tab Content Start -->
                            <div class="tab-content">
                                <!-- Tab Pane Start -->
                                <div class="tab-pane active" id="serviceImg01">
                                    <img src="<?=base_url()?>assets/images/services-img/service-img-01.jpg" alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg02">
                                    <img src="<?=base_url()?>assets/images/services-img/service-img-02.jpg" alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg03">
                                    <img src="<?=base_url()?>assets/images/services-img/service-img-03.jpg" alt="">
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane" id="serviceImg04">
                                    <img src="<?=base_url()?>assets/images/services-img/service-img-04.jpg" alt="">
                                </div>
                                <!-- Tab Pane End -->
                            </div>
                            <!-- Tab Content End -->
                        </div>
                    </div>
                    <!-- Service Image End -->

                    <!-- Service Items Start -->
                    <div class="service--items col-md-4 col-sm-6 text-right">
                        <!-- Service Item Start -->
                        <div class="service--item active">
                            <div class="dot" data-position-top="16px" data-position-right="-129px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg01">Step 01</a>
                            </h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service--item show-xxs d-xxs-block">
                            <div class="dot" data-position-top="16px" data-position-left="-129px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg03">Step 02</a>
                            </h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                        </div>
                        <!-- Service Item End -->

                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="13px" data-position-right="-54px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg02">Step 03</a>
                            </h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Service Items End -->

                    <!-- Service Items Start -->
                    <div class="service--items col-md-4 col-sm-6 float--right">
                        <!-- Service Item Start -->
                        <div class="service--item hidden-xxs">
                            <div class="dot" data-position-top="16px" data-position-left="-129px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg03">Step 02</a>
                            </h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                        </div>
                        <!-- Service Item End -->
                        
                        <!-- Service Item Start -->
                        <div class="service--item">
                            <div class="dot" data-position-top="13px" data-position-left="-54px"></div>

                            <h3 class="h3">
                                <a href="#" data-toggle="tab" data-target="#serviceImg04">Step 04</a>
                            </h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                        </div>
                        <!-- Service Item End -->
                    </div>
                    <!-- Service Items End -->
                </div>

            </div>
        </div>
        <!-- Services Section End -->

        <!-- Features Section Start -->
        <div class="features--section pd--100-0-40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title">
                    <h2 class="h2">Why Choose Us</h2>

                    <p>Some of  Our Features</p>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-01.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">We Are Professional</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-02.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Friendly Service</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-03.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">No Fix No Fees</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-04.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Well Reputation</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-05.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Free Diagnostics</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-06.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Low Price Guarantee</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-07.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">Quick Repair Process</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="feature--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/features-img/icon-08.png" alt="" data-rjs="2">
                        </div>

                        <div class="title">
                            <h3 class="h4">30 Days Warantee</h3>
                        </div>

                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the print been the industry's standard.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <!-- Counter Section Start -->
        <div class="counter--section pd--100-0-40" data-bg-img="<?=base_url()?>assets/images/counter-img/bg.jpg">
            <div class="container">
                <div class="row">
                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/counter-img/icon-01.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Happy Clients</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">94816</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                    
                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/counter-img/icon-02.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Completed Deals</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">102370</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                    
                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/counter-img/icon-03.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Running Procet</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">579</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->

                    <!-- Counter Item Start -->
                    <div class="counter--item col-md-3 col-xs-6 col-xxs-12">
                        <div class="icon">
                            <img src="<?=base_url()?>assets/images/counter-img/icon-04.png" alt="" data-rjs="2">
                        </div>

                        <div class="info">
                            <h2 class="title h4 font--primary">Award Winning</h2>
                            <h3 class="number h2"><span data-counter-up="numbers">3226</span></h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
        <!-- Counter Section End -->

        <!-- Gallery Section Start -->
            <!-- <div class="gallery--section pd--100-0">
                <div class="container">
                    <div class="section--title">
                        <h2 class="h2">Projects From Gallery</h2>

                        <p>Checkout Our Portfolio</p>
                    </div>

                    <div class="gallery--filter-nav font--secondary text-center">
                        <ul class="nav">
                            <li class="active" data-target="*">All Items</li>
                            <li data-target="computer">Computer</li>
                            <li data-target="laptop">Laptop</li>
                            <li data-target="tablet">Tablet</li>
                            <li data-target="mobile">Mobile</li>
                            <li data-target="other">Others Servecies</li>
                        </ul>
                    </div>

                    <div class="gallery--items row">
                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="computer mobile laptop">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-01.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Hard Disk Servecing</h3>

                                            <p>Catagory : Computer Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-01.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="laptop other tablet">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-02.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Laptop Servecing</h3>

                                            <p>Catagory : Laptop Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-02.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="tablet computer mobile">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-03.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Tablet Servecing</h3>

                                            <p>Catagory : Tablet Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-03.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="mobile laptop other">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-04.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Mobile Servecing</h3>

                                            <p>Catagory : Mobile Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-04.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="other tablet">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-05.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Laptop Servecing</h3>

                                            <p>Catagory : Laptop Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-05.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="computer mobile">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-06.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Other Servecing</h3>

                                            <p>Catagory : Other Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-06.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="laptop other">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-07.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Motherboard Servecing</h3>

                                            <p>Catagory : Computer Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-07.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery--item col-md-3 col-xs-6 col-xxs-12" data-cat="tablet computer">
                            <div class="gallery--img">
                                <img src="img/gallery-img/gallery-item-08.jpg" alt="" data-rjs="2">

                                <div class="gallery--info bg--overlay">
                                    <div class="vc--parent">
                                        <div class="vc--child">
                                            <h3 class="h4">Other Servecing</h3>

                                            <p>Catagory : Other Repair</p>

                                            <div class="btn-groups">
                                                <a href="gallery-details.html" class="btn btn-default"><i class="fa fa-chain"></i></a>
                                                <a href="img/gallery-img/gallery-item-08.jpg" class="btn btn-default" data-popup="img"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section--footer text-center mt--30">
                        <a href="gallery.html" class="btn btn-default">See More<i class="fa flm fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div> -->
        <!-- Gallery Section End -->

        <!-- Pricing Section Start -->
            <!-- <div class="pricing--section pd--100-0-40 bg--color-lightgray">
            <div class="container">
                <div class="section--title">
                    <h2 class="h2">Our Pricing Package</h2>

                    <p>Here Is Our Pricing Plan</p>
                </div>

                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xxs-12">
                        <div class="pricing--item">
                            <div class="pricing--icon">
                                <img src="img/pricing-img/icon-01.png" alt="" data-rjs="2">
                            </div>

                            <div class="pricing--title">
                                <h3 class="h4">Desktop Repair</h3>
                            </div>

                            <div class="pricing--price">
                                <p>Satarting at ...</p>

                                <h4 class="h2">$25.00</h4>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav">
                                    <li>Service Cost Depends on Your</li>
                                    <li>Device Problem</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                </ul>
                            </div>

                            <div class="pricing--footer">
                                <a href="pricing.html" class="btn btn-default">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12">
                        <div class="pricing--item">
                            <div class="pricing--icon">
                                <img src="img/pricing-img/icon-02.png" alt="" data-rjs="2">
                            </div>

                            <div class="pricing--title">
                                <h3 class="h4">iPad/Tablet Repair</h3>
                            </div>

                            <div class="pricing--price">
                                <p>Satarting at ...</p>

                                <h4 class="h2">$30.00</h4>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav">
                                    <li>Service Cost Depends on Your</li>
                                    <li>Device Problem</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                </ul>
                            </div>

                            <div class="pricing--footer">
                                <a href="pricing.html" class="btn btn-default">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12">
                        <div class="pricing--item active">
                            <div class="pricing--icon">
                                <img src="img/pricing-img/icon-03.png" alt="" data-rjs="2">
                            </div>

                            <div class="pricing--title">
                                <h3 class="h4">Laptop Repair</h3>
                            </div>

                            <div class="pricing--price">
                                <p>Satarting at ...</p>

                                <h4 class="h2">$40.00</h4>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav">
                                    <li>Service Cost Depends on Your</li>
                                    <li>Device Problem</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                </ul>
                            </div>

                            <div class="pricing--footer">
                                <a href="pricing.html" class="btn btn-default">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12">
                        <div class="pricing--item">
                            <div class="pricing--icon">
                                <img src="img/pricing-img/icon-04.png" alt="" data-rjs="2">
                            </div>

                            <div class="pricing--title">
                                <h3 class="h4">Mobile Repair</h3>
                            </div>

                            <div class="pricing--price">
                                <p>Satarting at ...</p>

                                <h4 class="h2">$10.00</h4>
                            </div>

                            <div class="pricing--features">
                                <ul class="nav">
                                    <li>Service Cost Depends on Your</li>
                                    <li>Device Problem</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                    <li>Lorem Ipsum Dummy Text</li>
                                </ul>
                            </div>

                            <div class="pricing--footer">
                                <a href="pricing.html" class="btn btn-default">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Pricing Section End -->


        <!-- Call To Action Section Start -->
        <div class="cta--section bg--color-darkgray">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Call To Action Content Start -->
                        <div class="cta--content">
                            <h2 class="h3">Looking For A Fast &amp; Reliable Repair Service</h2>

                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                        <!-- Call To Action Content Start -->
                    </div>

                    <div class="col-md-3">
                        <!-- Call To Action Button Start -->
                        <div class="cta--btn">
                            <a href="index.html#banner" class="btn btn-default">Book service now</a>
                        </div>
                        <!-- Call To Action Button Start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action Section End -->

        <!-- Testimonial Section Start -->
        <div class="testimonial--section pd--100-0" data-bg-img="<?=base_url()?>assets/images/testimonial-img/bg.jpg">
            <!-- Testimonial Slider Wrapper Start -->
            <div class="testimonial--slider-wrapper bg--overlay">
                <div class="container">
                    <!-- Section Title Start -->
                    <div class="section--title left">
                        <h2 class="h2">Satisfied Client’s</h2>

                        <p>What Our Client’s Say</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Testimonial Slider Start -->
                            <div class="testimonial--slider owl-carousel" data-owl-dots="true">
                            <?php foreach($feedbacks as $f){?>
                                <div class="testimonial--item">
                                    <div class="testimonial--content">
                                        <blockquote>
                                            <p><?=$f->content?></p>
                                        </blockquote>
                                    </div>

                                    <div class="testimonial--rating">
                                        <ul class="nav">
                                        <?php 
                                        $r=0; 
                                        while($r<$f->rating){
                                           echo '<li><i class="fa fa-star"></i></li>';
                                            $r++; 
                                            }
                                        ?>
                                        <?php $c=0; while($c<5-$f->rating){?>
                                            <li><i class="fa fa-star-o"></i></li>
                                        <?php $c++; }?>
                                        </ul>
                                    </div>

                                    <div class="testimonial--info">
                                        <div class="content pl--0">
                                            <h3 class="h5">- <?=$f->name?></h3>
                                            <p><?=$f->designation?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </div>
                            <!-- Testimonial Slider End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Slider Wrapper End -->

            <!-- Testimonial Video Start -->
            <div class="testimonial--video bg--overlay">
                <div class="vc--parent">
                    <div class="vc--child">
                        <div class="container-fluid">
                            <div class="col-md-6 col-md-offset-6">
                                <!-- Testimonial Video Content Start -->
                                <div class="testimonial--video-content text-center">
                                    <a href="<?=$web->video_url?>" class="play-btn" data-popup="video"><i class="fa fa-play"></i></a>

                                    <h3 class="h3">Watch Video</h3>
                                </div>
                                <!-- Testimonial Video Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Video End -->
        </div>
        <!-- Testimonial Section End -->

