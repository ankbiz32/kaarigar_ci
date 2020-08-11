
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
                <div class="checkout--form" data-form-validation="true">
                    <form action="#">
                        <div class="row pt--80">
                            <!-- Checkout Billing Info Start -->
                            <div class="checkout--billing-info col-md-6">
                                <h2 class="checkout--form-title h4">Billing Details</h2>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Name <em>*</em></span>
                                                <input type="text" name="checkoutFirstName" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Phone <em>*</em></span>

                                                <input type="tel" name="checkoutLastName" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>E-mail <em>*</em></span>

                                                <input type="email" name="checkoutEmail" class="form-control" required>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>
                                                <span>Pin code <em>*</em></span>

                                                <input type="text" name="checkoutPhone" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span>Address <em>*</em></span>

                                        <textarea name="checkoutAddress1" class="form-control" placeholder="Full Address" rows="4" required></textarea>
                                    </label>
                                </div>

                            </div>
                            <!-- Checkout Billing Info End -->

                            <!-- Checkout Order Info Start -->
                            <div class="checkout--order-info col-md-6">
                                <h2 class="checkout--form-title h4">Service details for <span>Plumber services</span></h2>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Services</th>
                                            <th>Min. charges</th>
                                        </tr>
                                    </thead>
                                </table>

                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Consultation</td>
                                            <td>₹ 150/-</td>
                                        </tr>
                                        <tr>
                                            <td>Tap change</td>
                                            <td>₹ 150/-</td>
                                        </tr>
                                        <tr>
                                            <td>Seapage resolution</td>
                                            <td></td>
                                        </tr>
                                        <tr class="bg--color-lightgray">
                                            <td><strong>Min bill amt.</strong></td>
                                            <td><strong>₹ 300/-</strong></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="panel-group" id="checkoutA">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <label for="checkoutPaymentInput01" data-toggle="collapse" data-target="#checkoutPayment01" data-parent="#checkoutA">
                                                    <input type="radio" name="checkoutPayment" value="check-cashout" id="checkoutPaymentInput01" checked>

                                                    <span class="font--secondary">Pay Now</span>
                                                </label>
                                            </h3>
                                        </div>

                                        <div id="checkoutPayment01" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <blockquote>
                                                    <p>Go cashless & pay the Min. estimated bill now and rest on completion of the services.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <label for="checkoutPaymentInput02" class="collapsed" data-toggle="collapse" data-target="#checkoutPayment02" data-parent="#checkoutA">
                                                    <input type="radio" name="checkoutPayment" value="paypal" id="checkoutPaymentInput02">

                                                    <span class="font--secondary">Pay Later</span>
                                                </label>
                                            </h3>
                                        </div>

                                        <div id="checkoutPayment02" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <blockquote>
                                                    <p>You can pay later after the services have been completed.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="checkout--submit-btn">
                                    <button type="submit" class="btn btn-default">Book Now</button>
                                </div>
                            </div>
                            <!-- Checkout Order Info End -->
                        </div>
                    </form>
                </div>
                <!-- Checkout Form End -->
            </div>
        </div>
