
         <!-- Footer Section Start -->
         <div class="footer--section bg--color-dark">
            <div class="footer--copyright-border"></div>

            <div class="container bg--overlay">
                <div class="row reset--gutter">
                    <div class="col-md-3 bg--color-theme bg--overlay">
                        <!-- Footer About Start -->
                        <div class="footer--about">
                            <a href="<?=base_url()?>" class="logo d-block">
                                <img src="<?=base_url()?>assets/images/footer-logo.png" alt="" data-rjs="2">
                            </a>

                            <div class="content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have available, its  really but the majority to use a passage rassing hidden.</p>
                            </div>

                            <div class="link">
                                <a href="about-us">Read More<i class="fa flm fa-angle-double-right"></i></a>
                            </div>

                            <div class="info">
                                <ul class="nav">
                                    <li class="fa-home"><?=$web->address_line1?> <?=$web->address_line2?></li>

                                    <li class="fa-envelope"><a href="mailto:connect@kaarigaronline.com"><?=$web->email?></a></li>

                                    <li class="fa-phone-square"><a href="tel:+91<?=$web->phone1?>">+91<?=$web->phone1?></a></li>

                                    <li class="fa-clock-o">Monday - Satarday (09 am to 08 pm) <span>(Sunday Closed)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer About End -->
                    </div>

                    <div class="col-md-9">
                        <!-- Footer Widgets Start -->
                        <div class="footer--widgets row">
                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4 ml--2">Our Services</h2>
                                </div>

                                <!-- Links Wdiget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#" class="ml--2"><i class="fa fa-angle-right"></i>AC repair</a></li>
                                        <li><a href="#" class="ml--2"><i class="fa fa-angle-right"></i>Electricians</a></li>
                                        <li><a href="#" class="ml--2"><i class="fa fa-angle-right"></i>Painters</a></li>
                                        <li><a href="#" class="ml--2"><i class="fa fa-angle-right"></i>Car repair</a></li>
                                        <li><a href="#" class="ml--2"><i class="fa fa-angle-right"></i>Carpenters</a></li>
                                        <li><a href="#" class="ml--2"><i class="fa fa-angle-right"></i>Plumbers</a></li>
                                        <li><a href="#" class="ml--2">See all <i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Links Wdiget End -->
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4">Important links</h2>
                                </div>

                                <!-- Links Wdiget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="register"><i class="fa fa-link"></i>New registration</a></li>
                                        <li><a href="about-us"><i class="fa fa-link"></i>About us</a></li>
                                        <li><a href="contact-us"><i class="fa fa-link"></i>Contact us</a></li>
                                        <li><a href="#"><i class="fa fa-link"></i>FAQ</a></li>
                                        <li><a href="#"><i class="fa fa-link"></i>Terms & conditions</a></li>
                                        <li><a href="privacy-policy"><i class="fa fa-link"></i>Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer--widget col-md-4">
                                <div class="widget--title">
                                    <h2 class="h4">Sign Up For Newsletter</h2>
                                </div>

                                <!-- Subscribe Widget Start -->
                                <div class="subscribe--widget" data-form-validation="true">
                                    <p>Sign Up Our Newsletter to Get Notification Our New Services</p>

                                    <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" class="form-control" placeholder="E-mail Address" required>
                                            
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default active"><i class="fa fa-send"></i></button>
                                            </span>
                                        </div>
                                    </form>

                                    <div class="social">
                                        <h3 class="h6">Find Us On</h3>

                                        <ul class="nav">
                                            <li><a href="<?=$web->fblink?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?=$web->twitterlink?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?=$web->instalink?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://api.whatsapp.com/send?phone=91<?=$web->whatsapp_no?>&text=Hi Kaarigaronline. I need your services. Please assist me on this." target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Subscribe Widget End -->
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <!-- Footer Widgets End -->

                        <!-- Footer Copyright Start -->
                        <div class="footer--copyright font--secondary clearfix">
                            <p class="float--left">&copy; Copyright 2020  | All Rights Reserved</p>
                            <p class="float--right"><a href="#">Kaarigaronline</a> by Cluebix software</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->

        <!-- Back To Top Button Start -->
        <div class="back-to-top-btn">
            <a href="https://api.whatsapp.com/send?phone=91<?=$web->whatsapp_no?>&text=Hi Kaarigaronline. I need your services. Please assist me on this." target="_blank" class="btn btn-success active"><i class="fa fa-whatsapp"></i></a>
            <!-- <a href="#" class="btn btn-success active"><i class="fa fa-angle-up"></i></a> -->
        </div>
        <!-- Back To Top Button End -->
    </div>
    <!-- Wrapper End -->


    <div class="modal fade" id="loc-modal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt--2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" ><i class="fa fa-map-marker"></i>&nbsp; Select your location</h4>
            </div>
            <div class="modal-body">
                <form action="Home/changeLoc" method="GET">
                    <div class="d-flex">
                        <select name="location" class="wide" id="area-select" required>
                            <option value="">-- Select your location --</option>
                            <?php foreach($locations as $l){?>
                                <option value="<?=$l->id?>" <?=isset($this->session->loc_id)?($this->session->loc_id==$l->id?'selected':''):''?>><?=$l->city?>, <?=$l->state?> (<?=$l->pin_code?>)</option>
                            <?php }?>
                        </select>
                        <button type="submit" class="btn btn-default area-select-btn ml--2">Search</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>




    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/isotope.min.js"></script>
    <script src="<?=base_url()?>assets/js/fakeLoader.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.sticky.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.timepicker.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.directional-hover.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.nice-select.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.form.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>assets/js/retina.min.js"></script>
    <script src="<?=base_url()?>assets/js/simsCheckbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- ==== Main JavaScript ==== -->
    <script src="<?=base_url()?>assets/js/main.js"></script>

    <script>
        $(document).ready(function(){
            
            // $("a").on('click', function(event) {
            //     if (this.hash !== "") {
            //     event.preventDefault();
            //     var hash = this.hash;
            //     $('html, body').animate({
            //         scrollTop: 620
            //     }, 300, function(){
            //         window.location.hash = hash;
            //     });
            //     } 
            // });
                   
            $( ".service-select li" ).click(function() {
                var cid=$(this).data('check-id')
                $('input[data-check-id='+cid+']').click(); 
            });

            $("#area-select").niceSelect();
            $("#area2-select").niceSelect();
        });
 
        
        $(".contact-form").validate();
        $(".login-form").validate();
        $(".info-form").validate();
        $(".pwd-form").validate();
        $(".reg-form").validate();
        $(".demo").simsCheckbox();

            
    //  Sweet alert for normal response
        $(document).ready(function(){
            const Toast = Swal.mixin({
                toast: false,
                position: 'center',
                showConfirmButton: false,
                timer: 3000
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


    //  Sweet alert for delete
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href'); 

            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    window.location = urlToRedirect;
                }
            })
        }

    </script>

</body>
</html>