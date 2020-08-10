

        <div class="page-header--section text-center">
            <!-- Page Title Start -->
            <div class="page--title pd--130-0" data-bg-img="<?=base_url()?>assets/images/page-header-img.jpg">
                <div class="container">
                    <h1 class="h1 text-left">Profile</h1>
                </div>
            </div>
            <!-- Page Title End -->

            <!-- Page Breadcrumb Start -->
            <div class="page--breadcrumb font--secondary">
                <div class="container">
                    <ul class="breadcrumb text-left">
                        <li><a href="index.html">Kaarigaronline</a></li>
                        <li class="active"><span>Profile</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Breadcrumb End -->
        </div>

        <div class="service-single--section pd--100-0-40">
            <div class="container">
                <div class="row">
                    <div class="service-single--sidebar profile-sidebar col-md-3 float--right pb--60">
                        <!-- Nav Links Widget Start -->
                        <div class="nav-links--widget bg--color-lightgray">
                            <h2 class="h4">Your Profile</h2>

                            <ul class="nav">
                                <li class="active"><a href="#info" class="font-16" data-toggle="tab">General Info</a></li>
                                <li><a href="#bookings" class="font-16" data-toggle="tab">Booking history</a></li>
                                <li><a href="#change" class="font-16" data-toggle="tab">Change password</a></li>
                                <li><a href="<?=base_url()?>logout" class="font-16">Logout</a></li>
                            </ul>
                        </div>
                        <!-- Nav Links Widget End -->
                    </div>

                    <div class="service-single--content col-md-9 pb--60">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="info">
                                <div class="d-flex justify-content-between">
                                    <h2 class="title h4 col-xs-9">General information</h2>
                                    <a href="#" data-toggle="modal" data-target="#info-modal" class="col-xs-3 text-right font-16 text--primary"><i class="fa fa-pencil"></i> Edit</a>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-xs-8 col-xxs-12">
                                        <ul>
                                            <li>Name:</li>
                                            <li class="font-16 mb--2"><strong><?=isset($this->session->reg->fname) ? $this->session->reg->fname : ''?></strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12">
                                        <ul>
                                            <li>Phone:</li>
                                            <li class="font-16 mb--2"><strong>+91<?=isset($this->session->reg->mobile_no) ? $this->session->reg->mobile_no : ''?></strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12">
                                        <ul>
                                            <li>E-mail:</li>
                                            <li class="font-16 mb--2"><strong><?=isset($this->session->reg->email) ? $this->session->reg->email : ''?>&nbsp;</strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12">
                                        <ul>
                                            <li>Pin code:</li>
                                            <li class="font-16 mb--2"><strong><?=isset($profile) ? $profile->pin_code : ''?></strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12">
                                        <ul>
                                            <li>Full address:</li>
                                            <li class="font-16 mb--2"><strong><?=isset($profile->address) ? $profile->address : ''?></strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="bookings">
                                <h2 class="title h4">Booking history</h2>

                                <div class="cart--items">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Booked on</th>
                                                <th>Service</th>
                                                <th>Bill amt.</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Booked on">15/05/20</td>
            
                                                <td data-label="Service">
                                                    <span>Plumber service</span> 
                                                </td>
            
                                                <td data-label="Bill amt.">₹350/-</td>
            
                                                <td data-label="Status"><span class="text--primary">BOOKED</span></td>
            
                                                <td data-label=" "><button class=" font-14"><i class="fa fa-info"></i>&nbsp; details</a></td>
                                            </tr>

                                            <tr>
                                                <td data-label="Booked on">15/05/20</td>
            
                                                <td data-label="Service">
                                                    <span>Electrician service</span> 
                                                </td>
            
                                                <td data-label="Bill amt.">₹350/-</td>
            
                                                <td data-label="Status"><span class="text--danger">CANCELLED</span></td>
            
                                                <td data-label=" "><button class=" font-14"><i class="fa fa-info"></i>&nbsp; details</a></td>
                                            </tr>
                                            <tr>
                                                <td data-label="Booked on">15/05/20</td>
            
                                                <td data-label="Service">
                                                    <span>Plumber service</span> 
                                                </td>
            
                                                <td data-label="Bill amt.">₹350/-</td>
            
                                                <td data-label="Status"><span class="text--success">COMPLETED</span></td>
            
                                                <td data-label=" "><button class=" font-14"><i class="fa fa-info"></i>&nbsp; details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                            
                            <div class="tab-pane fade" id="change">
                                <h2 class="title h4">Change password</h2>
                                <form class="pwd-form" id="pwd_form">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-8">
                                            <div class="form-group">
                                                <label for="">Current password:</label>
                                                <input type="password" name="oldp" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-8">
                                            <div class="form-group">
                                                <label for="">New password:</label>
                                                <input type="password" name="newp" id="newp" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-8">
                                            <div class="form-group">
                                                <label for="">Re-type new password:</label>
                                                <input type="password" data-rule-equalto="#newp" data-msg-equalto="Both passwords must be same" name="cnfp" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" id="proPwd" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
     
    <div class="modal fade" id="info-modal">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form action="<?=base_url('Home/updateProfile')?>" class="info-form" method="POST">
            <div class="modal-header pt--2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >Edit your info</h4>
              </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="fname" value="<?=isset($this->session->reg->fname) ? $this->session->reg->fname : ''?>" placeholder="Your full name" class="form-control required" required>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">E-mail:</label>
                            <input type="email" value="<?=isset($this->session->reg->email) ? $this->session->reg->email : ''?>" name="email" placeholder="Your Email" class="form-control email">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">Pin code:</label>
                            <input type="text" value="<?=isset($profile->pin_code) ? $profile->pin_code : ''?>" name="pin_code" placeholder="Area Pincode" class="form-control digits" maxlength="6" minlength="6" required>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <label for="">Full address:</label>
                        <div class="form-group">
                            <textarea name="address" placeholder="Full address" class="form-control" style="resize: none;" required rows="5"><?=isset($profile->address)?$profile->address:NULL?></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary mb--1" data-dismiss="modal">cancel</button>
              <button type="submit" class="btn btn-primary mb--1">Save changes</button>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->