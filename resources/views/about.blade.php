@extends('layouts.app')

@section('content')


    <div class="clearfix"></div>

    <div class="page-content" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.company_profile') }}</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                       {{ trans('messages.company_profile_msg') }}
                    </p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 animated triggerAnimation" data-animate="zoomIn">
                    <img src="img/pics/img25.jpg" alt=""/>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.our_mission') }}</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        {{ trans('messages.our_mission_msg') }}
                    </p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.our_promise') }}</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.p1') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.p2') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.p3') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.p4') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.p5') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.p6') }}
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content.custom-bkg end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="custom-heading02">
                    <h2>{{ trans('messages.our_core_values') }}</h2>
                    <p>{{ trans('messages.our_core_values_msg') }}</p>
                </div>
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-graduation-cap"></i>
                        </div>

                        <h4>{{ trans('messages.always_learning') }}</h4>

                        <p>
                            {{ trans('messages.always_learning_msg') }}
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <h4>{{ trans('messages.latest_technology') }}</h4>

                        <p>
                            {{ trans('messages.latest_technology_msg') }}
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-cubes"></i>
                        </div>

                        <h4>{{ trans('messages.safety') }}</h4>

                        <p>
                            {{ trans('messages.safety_msg') }}
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-gift"></i>
                        </div>

                        <h4>{{ trans('messages.love') }}</h4>

                        <p>
                            {{ trans('messages.love_msg') }}
                        </p>
                    </div><!-- .service-icon-center end -->
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-9">
                    <div class="custom-heading">
                        <h2>board of directors</h2>
                    </div><!-- .custom-heading end -->

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/jahir.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>Jahir Hussain</h5>
                                    <p class="position">
                                        Co-Founder - COO
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/younus.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>younus farveaz</h5>
                                    <p class="position">
                                        Founder - CEO
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/jeenath.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>Jeenath Nisha</h5>
                                    <p class="position">
                                        CFO
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-9 end -->

                <div class="col-md-3">
                    <div class="custom-heading">
                        <h2>join our team</h2>
                    </div><!-- .custom-heading end -->

                    <div class="promo-box promo-bkg01">
                        <h4>Developers needed</h4>
                        <p>
                            We are hiring software developers and have 2 opened
                            positions. See what we offer and what we need
                            and apply today!
                        </p>

                        <a href="driver-application.html" class="btn btn-medium btn-yellow">
                            <span>apply now</span>
                        </a>
                    </div><!-- .promo-box end -->
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content parallax parallax01 dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action clearfix">
                        <div class="text">
                            <h2>{{ trans('messages.first_class') }}</h2>
                            <p>
                                {{ trans('messages.first_class_msg') }}
                            </p>
                        </div><!-- .text end -->

                        <a href="{{ url('/contact') }}" class="btn btn-big">
                            <span>Request a demo</span>
                        </a>
                    </div><!-- .call-to-action end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content.parallax end -->

@stop