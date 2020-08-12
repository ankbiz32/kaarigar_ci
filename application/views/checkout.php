<?php if(!empty($this->session->cart)){?>

        <div class="page-header--section text-center">
            <!-- Page Title Start -->
            <div class="page--title pd--130-0" data-bg-img="<?=base_url()?>assets/images/page-header-img.jpg">
                <div class="container">
                    <h1 class="h1 text-left">Checkout</h1>
                </div>
            </div>
            <!-- Page Title End -->

            <!-- Page Breadcrumb Start -->
            <div class="page--breadcrumb font--secondary">
                <div class="container">
                    <ul class="breadcrumb text-left">
                        <li><a href="index.html">Kaarigaronline</a></li>
                        <li class="active"><span>checkout</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Breadcrumb End -->
        </div>


        <div class="checkout--section pd--40-0">
            <div class="container">

                <!-- <div class="checkout--info">
                    <p class="font--secondary">Have a coupon? <a href="#" class="checkout--info-toggle">Click Here to Enter Your Code</a></p>

                    <div class="checkout--info-form" data-form-validation="true">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter Coupon Code..." required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default">Apply Coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->

                <!-- Checkout Form Start -->
                <div class="checkout--form">
                    <form action="<?=base_url('booking-finish')?>" method="POST" id="chkout-form">
                        <div class="row pt--80">
                            <!-- Checkout Billing Info Start -->
                            <div class="checkout--billing-info col-md-6">
                                <h2 class="checkout--form-title h4">Billing Details</h2>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Name <em>*</em></span>
                                                <input type="text" name="" class="form-control" value="<?=isset($this->session->reg)?$this->session->reg->fname:''?>" readonly required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Phone <em>*</em></span>

                                                <input type="tel" name="" value="<?=isset($this->session->reg)?$this->session->reg->mobile_no:''?>" class="form-control" readonly required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>E-mail (optional)</span>

                                                <input type="email" name="email" class="form-control email">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Pin code <em>*</em></span>

                                                <input data-msg-required="Enter pincode" data-msg-minlength="Pincode must be of 6 digits" data-msg-maxlength="Pincode must be of 6 digits" type="text" name="pin_code" value="<?=!empty($this->session->cart)?$this->session->cart['profile']->pin_code:''?>" maxlength="6" minlength="6" class="form-control digits" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span>Full address <em>*</em></span>

                                        <textarea name="address" maxlength="150" class="form-control" placeholder="Full Address" rows="4" required><?=!empty($this->session->cart)?$this->session->cart['profile']->address:NULL?></textarea>
                                    </label>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Schedule date <em>*</em></span>
                                                <input type="text" id="date" name="schedule_date" placeholder="Choose a date for your service" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Schedule time <em>*</em></span>
                                                <input type="text" id="time" placeholder="Choose time for your service"  name="schedule_time"class="form-control" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span>Additional remarks</span>

                                        <textarea name="customer_remarks" maxlength="200" class="form-control" placeholder="Enter any additional information that you want to provide." rows="4"></textarea>
                                    </label>
                                </div>


                            </div>
                            <!-- Checkout Billing Info End -->

                            <!-- Checkout Order Info Start -->
                            <div class="checkout--order-info col-md-6">
                                <h2 class="checkout--form-title h4">Service details for <span><?=$this->session->cart['service']->name?></span> Service</h2>

                                <table class="table table-bordered">
                                    <tbody>
                                        <tr class="bg--color-lightgray">
                                            <td class="font-16"><strong>Services</strong></td>
                                            <td class="font-16"><strong>Min. charges</strong></td>
                                        </tr>
                                        <?php $total=0; foreach($this->session->cart['sub_svc'] as $ss){?>
                                        <tr>
                                            <td><?=$ss->text?></td>
                                            <td><?=$ss->min_charges!=NULL?'₹'.$ss->min_charges.'/-':'calculated after inspection'?></td>
                                        </tr>
                                        <?php
                                            if($ss->min_charges!=NULL){
                                                $total+=$ss->min_charges;
                                            }
                                         }?>
                                        <tr class="bg--color-lightgray">
                                            <td class="h5"><strong>Min. bill amt. *</strong></td>
                                            <td class="h5"><strong>₹ <?=$total?>/-</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <small class="mt--1 d-block">* Note:- This is the min bill amount. Final bill is subjected to the services that will be provided.</small>
                                
                                <input type="text" name="amt" value="<?=$total?>" class="" required hidden>

                                
                                <div class="panel-group" id="checkoutA">
                                <?php if($total>0){?>
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <label for="checkoutPaymentInput01" data-toggle="collapse" data-target="#checkoutPayment01" data-parent="#checkoutA">
                                                    <input type="radio" name="checkoutPayment" value="check-cashout" id="checkoutPaymentInput01" checked>

                                                    <span class="font--secondary">Pay now</span>
                                                </label>
                                            </h3>
                                        </div>

                                        <div id="checkoutPayment01" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <blockquote>
                                                    <p class="text--dark">Go cashless & pay the min. estimated bill now and rest on completion of the services.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>

                                    <!-- <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <label for="checkoutPaymentInput02" class="collapsed" data-toggle="collapse" data-target="#checkoutPayment02" data-parent="#checkoutA">
                                                    <input type="radio" name="checkoutPayment" value="paypal" id="checkoutPaymentInput02" required>

                                                    <span class="font--secondary">Pay Later</span>
                                                </label>
                                            </h3>
                                        </div>

                                        <div id="checkoutPayment02" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <blockquote>
                                                    <p class="text--dark">You can pay later after the services have been completed.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="checkout--submit-btn">
                                    <button type="submit" class="btn btn-default">Finish booking</button>
                                </div>
                            </div>
                            <!-- Checkout Order Info End -->
                        </div>
                    </form>
                </div>
                <!-- Checkout Form End -->
            </div>
        </div>

<?php } else { 
    redirect(base_url().'services');
 }?>
