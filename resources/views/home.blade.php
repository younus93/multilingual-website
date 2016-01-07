@extends('layouts.app')
@section('content')


        <div id="masterslider" class="master-slider ms-skin-default mb-0 ms-wk">
            <!-- first slide -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="masterslider/blank.gif" data-src="img/slider/slider01.png" alt="Strongest distribution network"/>

                <h2 class="ms-layer pi-caption01"
                    style="left: 100px; top: 340px;"
                    data-type="text"
                    data-effect="left(short)"
                    data-duration="300"
                    data-hide-effect="fade"
                    data-delay="300"
                        >
                    Simplified
                </h2>

                <h2 class="ms-layer pi-caption01"
                    style="left: 100px; top: 400px;"
                    data-type="text"
                    data-effect="left(short)"
                    data-duration="300"
                    data-hide-effect="fade"
                    data-delay="600"
                        >
                    Transportation
                </h2>


            </div><!-- .ms-slide end -->
        </div>



    <div class="page-title-style01" style="margin-top:25px;margin-bottom:25px;">
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
                        @stop
                </div>
            </div>
        </div>



        <div class="page-title-style01 to-tp">
            <div class="container">

                <div class="row mb-30">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-icon-left-boxed">
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <img src="img/svg/pi-truck-3.svg" alt="checklist icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>{{ trans('messages.are_truck') }}</h3>

                                <p>
                                    {{ trans('messages.are_truck_msg') }}
                                </p>
                                <p>
                                    <a href="{{ url('/truck-owners') }}" class="btn">{{ trans('messages.know_more') }}</a>
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left-boxed end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 col-sm-6">
                        <div class="service-icon-left-boxed">
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <img src="img/svg/pi-cargo-retail.svg" alt="warehouse icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>{{ trans('messages.are_transporter') }}</h3>

                                <p>
                                    {{ trans('messages.are_transporter_msg') }}
                                </p>
                                <p>
                                    <a href="{{ url('/transporters') }}" class="btn">{{ trans('messages.know_more') }}</a>
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left-boxed end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row.mb-30 end -->
            </div>
        </div>


@stop