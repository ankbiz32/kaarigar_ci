

        <div class="page-header--section text-center">
            <!-- Page Title Start -->
            <div class="page--title pd--130-0" data-bg-img="<?=base_url()?>assets/images/page-header-img.jpg">
                <div class="container">
                    <h1 class="h1 text-left">Services</h1>
                </div>
            </div>
            <!-- Page Title End -->

            <!-- Page Breadcrumb Start -->
            <div class="page--breadcrumb font--secondary">
                <div class="container">
                    <ul class="breadcrumb text-left">
                        <li><a href="index.html">Kaarigaronline</a></li>
                        <li class="active"><span>services</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Breadcrumb End -->
        </div>

        <div class="extra-services--section">
            <div class="container">
                <div class="row area-select-row">
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <form action="<?=base_url('Home/changeLoc')?>" method="GET">
                            <div class="d-flex">
                                <input type="text" name="return_url" value="<?=base_url('services')?>" hidden>
                                <select name="location" class="wide" id="area2-select" required>
                                    <option value="">-- Select your location --</option>
                                    <?php foreach($locations as $l){?>
                                        <option value="<?=$l->id?>" <?=isset($this->session->loc_id)?($this->session->loc_id==$l->id?'selected':''):''?>><?=$l->city?>, <?=$l->state?> (<?=$l->pin_code?>)</option>
                                    <?php }?>
                                </select>
                                <button type="submit" class="btn btn-default area-select-btn ml--2">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row AdjustRow">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Extra Service Item Start -->
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/extra-service-item-01.jpg" alt="" data-rjs="2">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/wrench.png" alt="plumber" class="sv-img">
                                            &nbsp;
                                            <a href="service-details.html">Plumber</a>
                                        </h2>
                                    </div>

                                    <div class="content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>

                                    <div class="footer">
                                        <a href="service-details.html" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Service Item End -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Extra Service Item Start -->
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/extra-service-item-02.jpg" alt="" data-rjs="2">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/electricity.png" alt="Electrician" class="sv-img">
                                            &nbsp;
                                            <a href="#">Electrician</a>
                                        </h2>
                                    </div>

                                    <div class="content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>

                                    <div class="footer">
                                        <a href="service-details.html" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Service Item End -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Extra Service Item Start -->
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/extra-service-item-03.jpg" alt="" data-rjs="2">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/air-conditioner.png" alt="AC repair" class="sv-img">
                                            &nbsp;
                                            <a href="#">AC repair</a>
                                        </h2>
                                    </div>

                                    <div class="content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>

                                    <div class="footer">
                                        <a href="service-details.html" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Service Item End -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Extra Service Item Start -->
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/extra-service-item-04.jpg" alt="" data-rjs="2">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/saw-up.png" alt="Carpenter" class="sv-img">
                                            &nbsp;
                                            <a href="#">Carpenter</a>
                                        </h2>
                                    </div>

                                    <div class="content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>

                                    <div class="footer">
                                        <a href="service-details.html" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Service Item End -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Extra Service Item Start -->
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/extra-service-item-05.jpg" alt="" data-rjs="2">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/brush.png" alt="Painter" class="sv-img">
                                            &nbsp;
                                            <a href="#">Painter</a>
                                        </h2>
                                    </div>

                                    <div class="content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>

                                    <div class="footer">
                                        <a href="service-details.html" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Service Item End -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Extra Service Item Start -->
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/extra-service-item-06.jpg" alt="">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/hair-cut.png" alt="hair cut" class="sv-img">
                                            &nbsp;
                                            <a href="#">Home hair cut</a>
                                    </div>

                                    <div class="content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>

                                    <div class="footer">
                                        <a href="service-details.html" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Service Item End -->
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Extra Service Item Start -->
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/extra-service-item-07.jpg" alt="">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/car-repair.png" alt="car repair" class="sv-img">
                                            &nbsp;
                                            <a href="#">Car repair</a>
                                    </div>

                                    <div class="content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>

                                    <div class="footer">
                                        <a href="service-details.html" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Service Item End -->
                    </div>
                </div>
            </div>
        </div>