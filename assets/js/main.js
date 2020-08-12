
;(function ($) {
    "use strict";
    
    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window),
        $body = $('body');

    /* ------------------------------------------------------------------------- *
     * FAKELOADER
     * ------------------------------------------------------------------------- */
    var $preloader = $('.preloader');

    if ( $preloader.length ) {
        $preloader.fakeLoader({ spinner: 'spinner2', bgColor: false });
    }
    
    /* ------------------------------------------------------------------------- *
     * CHECK DATA
     * ------------------------------------------------------------------------- */
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };

    $(function () {
        /* ------------------------------------------------------------------------- *
         * BANNER SECTION
         * ------------------------------------------------------------------------- */
        var $banner = $('.banner--section'),
            $bannerSlider = $banner.find('.banner--slider'),
            $bannerContent = $banner.find('.banner--content'),
            $bannerForm = $banner.find('.banner--form');

        $bannerSlider.on('initialized.owl.carousel', function (e) {
            $banner.css( 'min-height', $bannerContent.outerHeight() );

            $bannerForm.css( 'margin-top', $bannerContent.outerHeight() - 80 );
        });
        
        /* ------------------------------------------------------------------------- *
         * SHOP SECTION
         * ------------------------------------------------------------------------- */
        var $products = $('.products--section'),
            $productItemImg = $products.find('.product--item-img');

        if ( $productItemImg.length ) {
            $productItemImg.directionalHover({
                overlay: '.product--item-img-info'
            });
        }

        var $productSingle = $('.product-single--section'),
            $productSingleThumbnails = $productSingle.find('.product--single-gallery .thumbnails');

        $productSingleThumbnails.on('shown.bs.tab', '[data-toggle="tab"]', function (e) {
            $(e.target).addClass('active').parent().siblings().children().removeClass('active');
        });

        var $productRatingSelect = $('#productRatingSelect');
        
        if ( $productRatingSelect.length ) {
            $productRatingSelect.barrating({
                theme: 'fontawesome-stars-o',
                hoverState: false
            });
        }

        /* ------------------------------------------------------------------------- *
         * CHECKOUT SECTION
         * ------------------------------------------------------------------------- */
        var $checkout = $('.checkout--section'),
            $checkoutOrderInfo = $checkout.find('.checkout--order-info');
        
        $checkout.on('click', '.checkout--info-toggle', function (e) {
            e.preventDefault();

            var $t = $(this);

            $t.parent('p').siblings('.checkout--info-form').slideToggle();
        });


        /* ------------------------------------------------------------------------- *
         * BACK TO TOP BUTTON
         * ------------------------------------------------------------------------- */
        // var $backToTopBtn = $('.back-to-top-btn');

        // $backToTopBtn.on('click', 'a', function (e) {
        //     e.preventDefault();

        //     $('html, body').animate({
        //         scrollTop: 0
        //     }, 800);
        // });
        
        /* ------------------------------------------------------------------------- *
         * BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var $bgImg = $('[data-bg-img]');
        
        $bgImg.each(function () {
            var $t = $(this);

            $t.css('background-image', 'url(' + $t.data('bg-img') + ')').addClass('bg--img bg--overlay').attr('data-rjs', 2).removeAttr('data-bg-img');
        });

        /* ------------------------------------------------------------------------- *
         * RETINAJS
         * ------------------------------------------------------------------------- */
        retinajs();
        
        /* ------------------------------------------------------------------------- *
         * STICKYJS
         * ------------------------------------------------------------------------- */
        var $sticky = $('[data-trigger="sticky"]');
        
        $sticky.each(function () {
            $(this).sticky({
                zIndex: 999
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * FORM VALIDATION
         * ------------------------------------------------------------------------- */
        var $formValidation = $('[data-form-validation] form');
        
        $formValidation.each(function () {
            var $t = $(this);
            
            $t.validate({
                errorPlacement: function () {
                    return true;
                }
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * FORM AJAX
         * ------------------------------------------------------------------------- */
        var $ajaxForm = $('[data-form="ajax"] form');
        
        $ajaxForm.each(function () {
            var $form = $(this),
                $formStatus = $form.find('.status');
            
            $form.validate({
                errorPlacement: function () {
                    return true;
                },
                submitHandler: function (el) {
                    var $el = $(el);
                    
                    $el.ajaxSubmit({
                        success: function (res) {
                            $formStatus.show().html(res).delay(3000).fadeOut('show');
                        }
                    });
                }
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * FILE INPUT
         * ------------------------------------------------------------------------- */
        var $fileInput = $('input[type="file"]'),
            $fileInputStatus = $fileInput.siblings('.file-status');

        $fileInput.on('change', function () {
            var value = $(this).val().split('\\'),
                txt = value[value.length - 1];

            return txt ? $fileInputStatus.text( txt ) : '';
        });
        
        /* ------------------------------------------------------------------------- *
         * TOOLTIP
         * ------------------------------------------------------------------------- */
        var $tooltip = $('[data-toggle="tooltip"]');

        if ( $tooltip.length ) {
            $tooltip.tooltip();
        }
        
        /* ------------------------------------------------------------------------- *
         * SPINNER
         * ------------------------------------------------------------------------- */
        var $spinner = $('[data-trigger="spinner"]');

        $spinner.each(function () {
            var $t = $(this);

            $t.spinner({
                min: $t.data('min'),
                max: $t.data('max')
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * DATE
         * ------------------------------------------------------------------------- */
        // var $date = $('[data-trigger="date"]');

        // if ( $date.length ) {
        //     $date.datepicker({
        //         showOtherMonths: true,
        //         selectOtherMonths: true
        //     });
        // }
        
        /* ------------------------------------------------------------------------- *
         * TIME
         * ------------------------------------------------------------------------- */
        // var $time = $('[data-trigger="time"]');

        // if ( $date.length ) {
        //     $time.timepicker();
        // }

        /* ------------------------------------------------------------------------- *
         * OWL CAROUSEL
         * ------------------------------------------------------------------------- */
        var $owlCarousel = $('.owl-carousel');
        
        $owlCarousel.each(function () {
            var $t = $(this);
            
            $t.owlCarousel({
                items: checkData( $t.data('owl-items'), 1 ),
                margin: checkData( $t.data('owl-margin'), 0 ),
                loop: checkData( $t.data('owl-loop'), true ),
                smartSpeed: 1200,
                autoplayTimeout: 800,
                autoplay: checkData( $t.data('owl-autoplay'), true ),
                mouseDrag: checkData( $t.data('owl-drag'), true ),
                nav: checkData( $t.data('owl-nav'), false ),
                navText: ['<i class="fa fm fa-arrow-left"></i>', '<i class="fa flm fa-arrow-right"></i>'],
                dots: checkData( $t.data('owl-dots'), false ),
                responsive: checkData( $t.data('owl-responsive'), {} )
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * MAGNIFIC POPUP
         * ------------------------------------------------------------------------- */
        var $popupImg = $('[data-popup="img"]');
        
        if ( $popupImg.length ) {
            $popupImg.magnificPopup({
                type: 'image'
            });
        }

        var $popupVideo = $('[data-popup="video"]');
        
        if ( $popupVideo.length ) {
            $popupVideo.magnificPopup({
                type: 'iframe'
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * COUNTER UP
         * ------------------------------------------------------------------------- */
        // var $counterUp = $('[data-counter-up="numbers"]');
            
        // if ( $counterUp.length ) {
        //     $counterUp.counterUp({
        //         delay: 10,
        //         time: 1000
        //     });
        // }
        
        /* -------------------------------------------------------------------------*
         * COUNTDOWN
         * -------------------------------------------------------------------------*/
        var $countDown = $('[data-countdown]');
            
        $countDown.each(function () {
            var $t = $(this);
            
            $t.countdown($t.data('countdown'), function(e) {
                $(this).html( '<ul>' + e.strftime('<li><strong>%D</strong><span>Days</span></li><li><strong>%H</strong><span>Hours</span></li><li><strong>%M</strong><span>Minutes</span></li><li><strong>%S</strong><span>Seconds</span></li>') + '</ul>' );
            });
        });

        /* ------------------------------------------------------------------------- *
         * COLOR SWITCHER
         * ------------------------------------------------------------------------- */
        if ( typeof $.cColorSwitcher !== "undefined" ) {
            $.cColorSwitcher({
                'switcherTitle': 'Main Colors:',
                'switcherColors': [{
                    bgColor: '#f69323',
                    filepath: 'css/colors/color-1.css'
                }, {
                    bgColor: '#82b440',
                    filepath: 'css/colors/color-2.css'
                }, {
                    bgColor: '#ff5252',
                    filepath: 'css/colors/color-3.css'
                }, {
                    bgColor: '#e91e63',
                    filepath: 'css/colors/color-4.css'
                }, {
                    bgColor: '#00BCD4',
                    filepath: 'css/colors/color-5.css'
                }, {
                    bgColor: '#FC5143',
                    filepath: 'css/colors/color-6.css'
                }, {
                    bgColor: '#00B249',
                    filepath: 'css/colors/color-7.css'
                }, {
                    bgColor: '#D48B91',
                    filepath: 'css/colors/color-8.css'
                }, {
                    bgColor: '#8CBEB2',
                    filepath: 'css/colors/color-9.css'
                }, {
                    bgColor: '#119ee6',
                    filepath: 'css/colors/color-10.css'
                }],
                'switcherTarget': $('#changeColorScheme')
            });
        }
    });
    
    $wn.on('load', function () {
        /* ------------------------------------------------------------------------- *
         * BODY SCROLLING
         * ------------------------------------------------------------------------- */
        var isBodyScrolling = function () {
            if ( $wn.scrollTop() > 1 ) {
                $body.addClass('isScrolling');
            } else {
                $body.removeClass('isScrolling');
            }
        };

        isBodyScrolling();
        $wn.on('scroll', isBodyScrolling);

        /* ------------------------------------------------------------------------- *
         * ADJUST ROW
         * ------------------------------------------------------------------------- */
        var $adjustRow = $('.AdjustRow');
        
        if ( $adjustRow.length ) {
            $adjustRow.isotope({layoutMode: 'fitRows'});
        }
        
        /* ------------------------------------------------------------------------- *
         * MASONRY ROW
         * ------------------------------------------------------------------------- */
        var $masonryRow = $('.MasonryRow');
        
        if ( $masonryRow.length ) {
            $masonryRow.isotope();
        }
        
        /* ------------------------------------------------------------------------- *
         * HEADER SECTION
         * ------------------------------------------------------------------------- */
        var $header = $('.header--section'),
            $headerNavbarTop = $header.find('.header--navbar-top'),
            $headerNavbar = $header.find('.header--navbar'),
            $headerMegamenu = $headerNavbar.find('.megamenu'),
            isHeaderMegamenuRight = function () {
                var a = $headerNavbar.children('.container').outerWidth(),
                    b = a - $headerMegamenu.position().left,
                    c = $headerMegamenu.find('.dropdown-menu').width();

                return b < c ? '0' : 'auto';
            };

        if ( $headerNavbarTop.length ) {
            $headerNavbarTop.find('.logo, .header--navbar-top-btn, .header--navbar-top-info').css( 'height', $headerNavbarTop.outerHeight() );
        }

        if ( $headerMegamenu.length ) {
            $headerMegamenu.find('.dropdown-menu').css('right', isHeaderMegamenuRight);
        }
        
        /* ------------------------------------------------------------------------- *
         * SERVICES SECTION
         * ------------------------------------------------------------------------- */
        var $services = $('.services--section'),
            $serviceItem = $services.find('.service--item'),
            $serviceDot = $services.find('.service--item .dot');

        $serviceDot.each(function () {
            var $t = $(this);

            $t.css({
                'top': checkData( $t.data('position-top'), 'auto' ),
                'left': checkData( $t.data('position-left'), 'auto' ),
                'right': checkData( $t.data('position-right'), 'auto' )
            });
        });

        $serviceItem
            .on('click', '[data-toggle="tab"]', function (e) {
                e.preventDefault();
            })
            .on('mouseenter', function (e) {
                $serviceItem.removeClass('active');

                $(this).addClass('active').find('[data-toggle="tab"]').tab('show');
            });
        
        /* ------------------------------------------------------------------------- *
         * EXTRA SERVICES SECTION
         * ------------------------------------------------------------------------- */
        var $extraServices = $('.extra-services--section'),
            $extraServiceInfo = $extraServices.find('.extra-service--info');

        $extraServiceInfo.each(function () {
            var $t = $(this);

            $t.css( 'top', ( $t.outerHeight() - 67 ) );
        });
        
        /* ------------------------------------------------------------------------- *
         * GALLERY SECTION
         * ------------------------------------------------------------------------- */
        var $gallery = $('.gallery--section'),
            $galleryItems = $gallery.find('.gallery--items'),
            $galleryFilterNav = $gallery.find('.gallery--filter-nav'),
            $galleryImg = $gallery.find('.gallery--img');

        if ( $galleryImg.length ) {
            $galleryImg.directionalHover({
                overlay: '.gallery--info'
            });

            $gallery.find('[data-popup="img"]').on('mfpClose', function (e) {
                $galleryImg.directionalHover({
                    overlay: '.gallery--info'
                });
            });
        }

        if ( $galleryItems.length ) {
            $galleryItems.isotope({
                animationEngine: 'best-available',
                itemSelector: '.gallery--item'
            });
        }

        $galleryFilterNav.on('click', 'li', function (e) {
            e.preventDefault();

            var $t = $(this),
                f = $t.data('target'),
                s = (f !== '*') ? '[data-cat~="'+ f +'"]' : f;

            $galleryItems.isotope({
                filter: s
            });
            
            $t.addClass('active').siblings().removeClass('active');
        });
        
        /* ------------------------------------------------------------------------- *
         * EXPERTS SECTION
         * ------------------------------------------------------------------------- */
        var $experts = $('.experts--section'),
            $expertMembers = $experts.find('.expert--members'),
            $expertMembersNav = $experts.find('.expert--members-nav');

        $expertMembersNav.on('click', 'button', function () {
            $expertMembers.trigger( $(this).data('trigger') );
        });
        
        /* ------------------------------------------------------------------------- *
         * FOOTER SECTION
         * ------------------------------------------------------------------------- */
        var $footer = $('.footer--section'),
            $footerAboutLogo = $footer.find('.footer--about .logo'),
            $footerWidgetTitle = $footer.find('.widget--title');

        if ( $footerAboutLogo.length ) {
            $footerWidgetTitle.css( 'margin-top', $footerAboutLogo.outerHeight() - 30 );
        }

        var $footerCopyright = $footer.find('.footer--copyright'),
            $footerCopyrightBorder = $footer.find('.footer--copyright-border');

        if ( $footerCopyrightBorder.length ) {
            $footerCopyrightBorder.css( 'top', $footerCopyright.position().top );
        }
    });

     /* ------------------------------------------------------------------------- *
     * CUSTOM SCrIPTS
     * ------------------------------------------------------------------------- */

    $('#svc_loc_submit').click(function(){
        $('.svc-info').remove();
        var form=$('#svc_loc_form');
        if(form.valid()){
            var formData = new FormData(document.getElementById("svc_loc_form"));
            $.ajax({
                url: form.attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                dataType: 'JSON',
                type: 'POST',
                success: function(data){
                    if(!data.error){
                        $('#svc_loc_modal').modal('toggle');
                        $(`<label class="success d-block mt--1 pl--1 svc-info"><strong>Service available.</strong></label>`).insertAfter('#svc_submit');
                        $('#loc_block').html('Location: '+data.area+' '+data.city);
                        $('#svc_submit').removeAttr('disabled');
                    }
                    else{
                        $('#svc_loc_modal').modal('toggle');
                        $(`<label class="error d-block mt--1 pl--1 svc-info"><strong>Sorry! Service currently not available in this location.</strong></label>`).insertAfter('#svc_submit');
                        $('#loc_block').html(data.area+' '+data.city);
                        $('#svc_submit').attr('disabled','true');
                    }
                },
                error:function(){
                    alert('server error');
                }
            });
        }
    });

    $('#proPwd').click(function(){
        $('#pwd_form .error-block').remove();
        var form=$('#pwd_form');
        if(form.valid()){
            var formData = new FormData(document.getElementById("pwd_form"));
            $.ajax({
                url: 'UserLogin/changePwd',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                type: 'POST',
                beforeSend: function(){
                    $('#proPwd').html('Processing <i class="fa fa-spin fa-circle-o-notch"></i>');
                },
                success: function(data){
                    $('#proPwd').hide().html('Next').fadeIn(500);
                    if(!data.error){
                        $(`
                        <label class="success d-block mt--1">Password Changed successfully.</label>
                        `).hide().insertAfter('#proPwd').fadeIn(500);
                    }
                    else{
                        $(`
                        <label class="error d-block mt--1">`+data.error+`</label>
                        `).hide().insertAfter('#proPwd').fadeIn(500);
                    }
                },
                error:function(){
                    $('#proPwd').hide().html('Register').fadeIn(500);
                    $(`
                    <label class="error d-block mt--1">* Server error</label>
                    `).insertAfter('#proPwd');
                }
            });
        }
    });

    
    
    
})(jQuery);
