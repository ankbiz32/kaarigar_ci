

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
                            <div class="d-flex" style="align-items:center">
                                <p class="text--white h5 mt--1 mr--1 d-flex hidden-xxs" style="align-items:center"><i class="fa fa-map-marker mr--05 mt---05"></i> Location:</p>
                                <input type="text" name="return_url" value="<?=base_url('services')?>" style="visibility:hidden; opacity:0;" readonly hidden>
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

                <?php if(isset($this->session->loc_id)){ ?>
                    <div class="row mt--2 pl--1"><p class="font-16 h5">Following services are available in "<?=$this->session->area.''.$this->session->loc_city?>" :</p></div>
                <?php }?>

                <div class="row AdjustRow mt--3">
                <?php if(!empty($services)){ foreach($services as $svc){?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="extra-service--item">
                            <img src="<?=base_url()?>assets/images/extra-services-img/<?=$svc->img_src?>" alt="Service" data-rjs="2">

                            <div class="extra-service--info">
                                <div class="extra-service--info-content">
                                    <div class="title">
                                        <h2 class="h4">
                                            <img src="<?=base_url()?>assets/images/services-img/<?=$svc->icon_src?>" alt="Icon" class="sv-img">
                                            &nbsp;
                                            <a href="<?=base_url('service/').$svc->id.'/'.$svc->slug?>"><?=$svc->name?></a>
                                        </h2>
                                    </div>

                                    <div class="content">
                                        <p><?=strlen($svc->descr)>190?substr($svc->descr,0,175).' ...':$svc->descr?></p>
                                    </div>

                                    <div class="footer">
                                        <a href="<?=base_url('service/').$svc->id.'/'.$svc->slug?>" class="btn btn-default">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } } else{?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="extra-service--item">
                            <h5>No services found.</h5>
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>
        </div>