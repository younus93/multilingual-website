@extends('layouts.app')
@section('content')


    <div id="masterslider" style="min-height:500px;" class="master-slider ms-skin-default mb-0 ms-wk">
        <!-- slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="masterslider/blank.gif" data-src="{{ url('img/slider/slider02.jpg') }}" alt="background image"/>
            <img class="ms-layer" src="masterslider/blank.gif" data-src="{{ url('img/mobile.png') }}" alt=""
                 style="left: 700px; top: 100px; max-height: 500px;max-width: 500px;"
                 data-type="image"
                 data-delay="1000"
                 data-effect="right(short)"
            />

            <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                 style="left: 0; top: 170px;"
                 data-type="image"
                 data-effect="left(short)"
                 data-delay="0"
                    />

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 195px;"
                data-type="text"
                data-effect="left(short)"
                data-delay="300"
                    >
                Hire trucks,
            </h2>

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 260px;"
                data-type="text"
                data-effect="left(short)"
                data-delay="600"
                >
                Online.
            </h2>
            <p class="ms-layer pi-text"
               style="font-size:20px; line-height: 30px; left: 0px; top: 430px;"
               data-type="text"
               data-delay="1600"
            >
                TruckJee is an online platform used by various <br>organizations to hire trucks online!<br>
                Give a missed call at <strong>9375551122</strong> to get started!
            </p>


        </div><!-- .ms-slide end -->

    </div><!-- #masterslider end -->




        <div class="page-title-style01" style="margin-top:25px;margin-bottom:25px; padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02" style="margin-bottom:30px;">
                        <h2>{{ trans('messages.what_we_offer') }}</h2>
                        <p>
                            {{ trans('messages.what_we_offer_msg') }}
                        </p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row mb-30">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="img/svg/pi-truck-1.svg" alt="checklist icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>{{ trans('messages.verified_owners') }}</h3>

                            <p>
                                {{ trans('messages.verified_owners_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="img/svg/pi-officer.svg" alt="warehouse icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>{{ trans('messages.transporter_base') }}</h3>

                            <p>
                                {{ trans('messages.transporter_base_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row.mb-30 end -->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="img/svg/pi-map-3.svg" alt="map icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>{{ trans('messages.real_time_tracking') }}</h3>

                            <p>
                                {{ trans('messages.real_time_tracking_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="img/svg/pi-availability-2.svg" alt="touch icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>{{ trans('messages.accessibility')}}</h3>

                            <p>
                                {{ trans('messages.accessibility_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row.mb-30 end -->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="img/svg/pi-graph.svg" alt="graph icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>{{ trans('messages.more_roi') }}</h3>

                            <p>
                                {{ trans('messages.more_roi_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="img/svg/pi-touch-desktop.svg" alt="touch icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>{{ trans('messages.online_portal') }}</h3>

                            <p>
                                {{ trans('messages.online_portal_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left-boxed end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row.mb-30 end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.why_choose_truckjee') }}</h2>
                    </div><!-- .custom-heading end -->
                        <iframe class ="col-md-12" height="300px" src="https://www.youtube.com/embed/5NvlrOgraqo" frameborder="0" allowfullscreen></iframe>
                </div><!-- .col-md-8 end -->

                <div class="col-md-5">

                    <ul class="fa-ul large-icons">
                        <li>
                            <div class="icon-container animated triggerAnimation zoomIn" data-animate="zoomIn" style="opacity: 1;">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3>{{ trans('messages.strong_presence') }}</h3>

                                <p>
                                    {{ trans('messages.strong_presence_msg') }}
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation zoomIn" data-animate="zoomIn" style="opacity: 1;">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3>{{ trans('messages.end') }}</h3>

                                <p>
                                    {{ trans('messages.end_msg') }}
                                </p>
                            </div><!-- .li-content end -->
                        </li>
                        <li>
                            <div class="icon-container animated triggerAnimation zoomIn" data-animate="zoomIn" style="opacity: 1;">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3>{{ trans('messages.easy_integration') }}</h3>

                                <p>
                                    {{ trans('messages.easy_integration_msg') }}
                                </p>
                            </div><!-- .li-content end -->
                        </li>
                    </ul><!-- .fa-ul .fa-ul-large end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>
        <!-- Are you a Transporter or truck owner section -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02" style="margin-bottom:30px;">
                        <h2>{{ trans('messages.get_in_touch') }}</h2>
                        <p>
                            {{  trans('messages.get_in_touch_msg') }}
                        </p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div>
        <!-- Request a callback Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <img src="img/pics/homepage.png" alt="homepage image">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div id="loader">
                        <img src="img/loader.gif" alt="loading" style="height:150px;width: 150px;">
                        <p>Please wait</p>
                    </div>
                    <form id="homeForm">
                        <p>{{ trans('messages.required_fields') }}</p>

                        <!-- Name form field -->
                        <div class="form-group">
                            {!! Form::label('Name', trans('messages.name') ) !!}
                            {!! Form::text('Name',null,['class'=>'form-control']) !!}
                        </div>

                        <!-- Phone form field -->
                        <div class="form-group">
                            {!! Form::label('Phone', trans('messages.phone')) !!}
                            {!! Form::text('Phone',null,['class'=>'form-control']) !!}
                        </div>

                        <!-- Email form field -->
                        <div class="form-group">
                            {!! Form::label('Email', trans('messages.email')) !!}
                            {!! Form::text('Email',null,['class'=>'form-control']) !!}
                        </div>

                        <!-- Submit button -->
                        <div class="form-group">
                            {!! Form::submit('Submit',['class'=>'btn btn-yellow form-control']) !!}
                        </div>
                    </form>
                    <div class="alert" id="homeFormAlert">
                    </div>
                    @section('scripts')

                        <script>

                            $('#homeFormAlert').hide();
                            $('#loader').hide();
                            $('#homeForm').on('submit',function(e){
                                e.preventDefault();
                                $('#homeForm').hide();
                                $('#loader').show();
                                $('#homeFormAlert').html("");
                                $.ajax({

                                    type    :   'POST',
                                    url     :   '/forms/3',
                                    data    :   $('#homeForm').serialize(),
                                    success :   function(msg){
                                        $('#homeForm').slideUp(1000);
                                        $('#loader').fadeOut(1000);
                                        $('#homeFormAlert').append("<h3>"+msg.success+"</h3>");
                                        $('#homeFormAlert').append("<h4><a href='{{ url('/') }}'>Click here to submit another enquiry.</a></h4>");
                                        $('#homeFormAlert').show();
                                    },
                                    error   : function(xhr,status, response){
                                        var error = jQuery.parseJSON(xhr.responseText);  // this section is key player in getting the value of the errors from controller.
                                        console.log(error);
                                        $('#homeFormAlert').append('<ul>');
                                        for(var k in error.errors){
                                            if(error.errors.hasOwnProperty(k)){
                                                error.errors[k].forEach(function(val){
                                                    $('#homeFormAlert').append('<li>' + val + '</li>');
                                                });
                                            }
                                        }
                                        $('#loader').hide();
                                        $('#homeForm').show();
                                        $('#homeFormAlert').show();
                                    }
                                });
                            });
                        </script>
                        <script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
                        <script>
                            /* <![CDATA[ */
                            jQuery(document).ready(function ($) {
                                'use strict';

//                                function equalHeight() {
//                                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
//                                        var maxHeight = $(this).outerHeight();
//                                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
//                                    });
//                                };

//                                $(document).ready(equalHeight);
//                                $(window).resize(equalHeight);

                                // MASTER SLIDER START
                                var slider = new MasterSlider();
                                slider.setup('masterslider', {
                                    width: 1140, // slider standard width
                                    height: 550, // slider standard height
                                    space: 0,
                                    speed: 50,
                                    layout: "fullwidth",
                                    centerControls: false,
                                    autoplay: false,
                                    grabCursor : false,
                                    swipe : false,
                                    // more slider options goes here...
                                    // check slider options section in documentation for more options.
                                });
                                // adds Arrows navigation control to the slider.
//         slider.control('arrows');


                            });

                            /* ]]> */
                        </script>
                        @stop
                </div>
            </div>
        </div>






@stop
