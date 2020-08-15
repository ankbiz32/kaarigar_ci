

        <div class="page-header--section text-center">
            <!-- Page Title Start -->
            <div class="page--title pd--130-0" data-bg-img="<?=base_url()?>assets/images/page-header-img.jpg">
                <div class="container">
                    <h1 class="h1 text-left"><?=$service->name?></h1>
                </div>
            </div>
            <!-- Page Title End -->

            <!-- Page Breadcrumb Start -->
            <div class="page--breadcrumb font--secondary">
                <div class="container">
                    <ul class="breadcrumb text-left">
                        <li><a href="<?=base_url()?>">Kaarigaronline</a></li>
                        <li><a href="<?=base_url('services')?>">Services</a></li>
                        <li class="active"><span><?=$service->name?></span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Breadcrumb End -->
        </div>

        <div class="service-single--content pd--80-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 mb--3">
                        <h4 class="h3 mb--3">
                            <img src="<?=base_url()?>assets/images/services-img/<?=$service->icon_src?>" alt="Carpenter" class="sv-img"> &nbsp; <?=$service->name?> service
                        </h4>  
                        <hr> 
                        <p class="font-16">
                            <i class="fa fa-map-marker"></i>&nbsp;
                            <strong>Available in </strong>:
                            <br>
                            <?php foreach($avail_locs as $avl){?>
                                <?=$avl->area?> <?=$avl->city?> | 
                            <?php }?>
                        </p>  
                        
                        <?php if($service->min_charges!=NULL){?>
                        <p class="font-16">
                            <i class="fa fa-money"></i>&nbsp; 
                            <strong>Minimum charges </strong>: 
                            <br>Rs. <?=$service->min_charges?>/-
                            <br><small>(<?=$service->min_charge_txt?>)</small>
                        </p> 
                        <?php }?> 
                        <p class="font-16">
                            <i class="fa fa-info-circle fa-sm"></i>&nbsp; 
                            <strong>Details of service </strong>: 
                            <br>
                            <?=$service->descr?>
                        </p>  
                        <p class="font-16">
                            <i class="fa fa-credit-card"></i>&nbsp; 
                            <strong>Payment mode </strong>: 
                            <br>Prepaid<?=$service->can_be_postpaid==1?' / Postpaid':' only'?>
                        </p>  
                    </div>

                    <div class="service-single--sidebar col-sm-4 float--right pb--60">
                        <div class="nav-links--widget bg--color-lightgray pb--60">
                            <h2 class="h4"><strong>Book this service</strong></h2>
                            <p class="ml--3 font-16"><strong>Select your requirements:</strong></p>
                            <form action="<?=base_url()?>book-service" method="POST" id="svc-form" class="ml--3 mr--3">
                                <input type="text" value="<?=$service->id?>"  name="service_id" hidden style="visibility:hidden; position:absolute">

                                <ul class="demo service-select">
                                <?php
                                foreach($sub_services as $ss){?>
                                    <li data-check-id="<?=$ss->id?>"><?=$ss->text?>
                                        <?php if($ss->min_charges!=NULL){?>
                                        <br>
                                        <small>(min charges : ₹ <?=$ss->min_charges?>/-)</small>
                                        <?php }?>
                                    </li>
                                    <input type="checkbox" class="subServices" value="<?=$ss->id?>" data-check-id="<?=$ss->id?>" name="subsvc[]" style="visibility:hidden; position:absolute">
                                <?php } ?>
                                </ul>

                                <div class="row d-flex pl--2 pr--2 mb--1" style="align-items:center">
                                    <p class="mb--0" id="loc_block"><?=isset($this->session->loc_id)?' Location: '.$this->session->loc_area.' '.$this->session->loc_city:'Select your location'?></p>
                                    <button type="button" class="font-14 ml--auto" data-toggle="modal" data-target="#svc_loc_modal" style="line-height:1; padding:0;">Change</button>
                                </div>
                                
                                <label class="error errTxt d-block mb--1"></label>
                                <?php if(isset($this->session->reg)){?>
                                    <button type="submit" class="btn btn-primary bookBtn" id="svc_submit" <?=isset($this->session->loc_id)?'':' disabled'?>>Book now</button>
                                <?php } else{?>
                                    <a href="<?=base_url('login')?>?return_url=<?=$service->id?>" class="btn btn-primary bookBtn">Login to book service</a>
                                <?php }?>
                            </form>

                        </div>
                        <!-- Nav Links Widget End -->
                    </div>
                </div>         
            </div>
        </div>

        <div class="modal fade" id="svc_loc_modal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt--2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" ><i class="fa fa-map-marker"></i>&nbsp; Select your location</h4>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('Home/scvCheckInLoc')?>" id="svc_loc_form">
                <input name="svc_id" class="" value="<?=$service->id?>" required hidden>
                    <div class="d-flex">
                        <select name="location" class="wide" id="area3-select" required>
                            <?php foreach($locations as $l){?>
                                <option value="<?=$l->id?>" <?=isset($this->session->loc_id)?($this->session->loc_id==$l->id?'selected':''):''?>><?=$l->city?>, <?=$l->state?> (<?=$l->pin_code?>)</option>
                            <?php }?>
                        </select>
                        <button type="button" id="svc_loc_submit" class="btn btn-default area-select-btn ml--2">Search</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
