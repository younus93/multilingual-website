<div id="footer-wrapper" class="footer-dark">
    <footer id="footer">
        <div class="container">
            <div class="row">
                <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">

                </ul><!-- .col-md-3.footer-widget-container end -->

                <ul class="col-md-3 col-sm-6 footer-widget-container">


                </ul><!-- .col-md-3.footer-widget-container end -->

                <ul class="col-md-3 col-sm-6 footer-widget-container">

                </ul><!-- .col-md-3.footer-widget-container end -->

                <ul class="col-md-3 col-sm-6 footer-widget-container">
                    <li class="widget widget-text">
                        <div class="title">
                            <h3>contact us</h3>
                        </div>

                        <address>
                            AH-16, Shanthi Colony, <br/>
                            Anna Nagar, <br/>
                            Chennai - 600040.
                        </address>

                                <span class="text-big">
                                    044 42127143
                                </span>
                        <br />

                        <a href="mailto:">info@truckjee.com</a>
                        <br />
                        {{--<ul class="footer-social-icons">--}}
                            {{--<li><a href="#" class="fa fa-facebook"></a></li>--}}
                            {{--<li><a href="#" class="fa fa-twitter"></a></li>--}}
                            {{--<li><a href="#" class="fa fa-google-plus"></a></li>--}}
                        {{--</ul><!-- .footer-social-icons end -->--}}
                    </li><!-- .widget.widget-text end -->
                </ul><!-- .col-md-3.footer-widget-container end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </footer><!-- #footer end -->

    <div class="copyright-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>TRUCKJEE 2015. All RIGHTS RESERVED.</p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">

                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .copyright-container end -->

    <a href="#" class="scroll-up">Scroll</a>
</div><!-- #footer-wrapper end -->


<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
<script src="js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->

<script>
    /* <![CDATA[ */
    jQuery(document).ready(function ($) {
        'use strict';

        function equalHeight() {
            $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                var maxHeight = $(this).outerHeight();
                $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
            });
        };

        $(document).ready(equalHeight);
        $(window).resize(equalHeight);

        // MASTER SLIDER START
        var slider = new MasterSlider();
        slider.setup('masterslider', {
            width: 1140, // slider standard width
            height: 854, // slider standard height
            space: 0,
            speed: 50,
            layout: "fullwidth",
            centerControls: false,
            loop: true,
            autoplay: true
            // more slider options goes here...
            // check slider options section in documentation for more options.
        });
        // adds Arrows navigation control to the slider.
         slider.control('arrows');


    });

    /* ]]> */
</script>
