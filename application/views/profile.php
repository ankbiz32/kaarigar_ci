

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
                                <li><a href="index.html" class="font-16">Logout</a></li>
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
                                    <div class="col-sm-4 col-xs-8 col-xxs-12 mb--2">
                                        <ul>
                                            <li>Name:</li>
                                            <li class="font-16"><strong>Ankur Agrawal</strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12 mb--2">
                                        <ul>
                                            <li>Phone:</li>
                                            <li class="font-16"><strong>+918888888888</strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12 mb--2">
                                        <ul>
                                            <li>E-mail:</li>
                                            <li class="font-16"><strong>ankur@cluebix.com</strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12 mb--2">
                                        <ul>
                                            <li>Pin code:</li>
                                            <li class="font-16"><strong>492001</strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-xxs-12 mb--2">
                                        <ul>
                                            <li>Full address:</li>
                                            <li class="font-16"><strong>Shankar nagar, near BTI ground, Raipur (C.G.)</strong></li>
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
                                                <th>Booking id</th>
                                                <th>Booked on</th>
                                                <th>Schedule</th>
                                                <th>Bill amt.</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Booking id">#00105</td>
            
                                                <td data-label="Booked on">15/05/20</td>
            
                                                <td data-label="Schedule">
                                                    <span>Date : 18/05/20</span> <br>
                                                    <span>Time : 11:00 am</span>
                                                </td>
            
                                                <td data-label="Bill amt.">₹350/-</td>
            
                                                <td data-label="Status"><span class="text--primary">BOOKED</span></td>
            
                                                <td data-label=" "><button class=" font-14"><i class="fa fa-info"></i>&nbsp; details</a></td>
                                            </tr>

                                            <tr>
                                                <td data-label="Booking id">#00105</td>
            
                                                <td data-label="Booked on">15/05/20</td>
            
                                                <td data-label="Schedule">
                                                    <span>Date : 18/05/20</span> <br>
                                                    <span>Time : 11:00 am</span>
                                                </td>
            
                                                <td data-label="Bill amt.">₹350/-</td>
            
                                                <td data-label="Status"><span class="text--danger">CANCELLED</span></td>
            
                                                <td data-label=" "><button class=" font-14"><i class="fa fa-info"></i>&nbsp; details</a></td>
                                            </tr>
                                            <tr>
                                                <td data-label="Booking id">#00105</td>
            
                                                <td data-label="Booked on">15/05/20</td>
            
                                                <td data-label="Schedule">
                                                    <span>Date : 18/05/20</span> <br>
                                                    <span>Time : 11:00 am</span>
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
                                <form action="" class="pwd-form" method="POST">
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-8">
                                            <div class="form-group">
                                                <label for="">Current password:</label>
                                                <input type="password" name="oldp" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-8">
                                            <div class="form-group">
                                                <label for="">New password:</label>
                                                <input type="password" name="newp" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-8">
                                            <div class="form-group">
                                                <label for="">Re-type new password:</label>
                                                <input type="password" name="cnfp" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
     