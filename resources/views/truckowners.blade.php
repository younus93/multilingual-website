@extends('layouts.app')

@section('content')

    <div class="clearfix"></div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.to_heading') }}</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                       {{ trans('messages.to_msg') }}
                    </p>

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.to1') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.to2') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.to3') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.to4') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.to5') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.to6') }}
                        </li>
                    </ul><!-- .fa-ul end -->

                    <p>
                        {{ trans('messages.to_msg_1') }}
                    </p>

                </div><!-- .col-md-6 end -->

                <div class="col-md-6 animated triggerAnimation" data-animate="zoomIn">
                    <img src="img/pics/warehouse.png" alt=""/>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02" style="margin-bottom:30px;">
                    <h2>{{ trans('messages.truckjee_finds_loads') }}</h2>
                    <p>
                        {{ trans('messages.run_truck') }}
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="img/pics/truckowner.png" alt="">
                <img src="img/pics/truckowner1.png" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="custom-heading">
                    <h2>{{ trans('messages.make_it_simple') }}</h2>
                </div><!-- .custom-heading end -->
                <p class="text-big">
                    {{ trans('messages.make_it_simple_msg') }}
                </p>
                <p>
                    {{ trans('messages.make_it_simple_msg_1') }}

                </p>
                <ul class="service-list-big-icons-details">
                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-delivery-2.svg" alt="checklist icon"/>
                        </div><!-- .icon-container end -->



                        <div class="service-details">
                            <h4>{{ trans('messages.notify') }}</h4>

                            <p>
                                {{ trans('messages.notify_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-map-1.svg" alt="clock icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>{{ trans('messages.get_loads') }}</h4>

                            <p>
                                {{ trans('messages.get_loads_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-globe-9.svg" alt="truck icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>{{ trans('messages.select') }}</h4>

                            <p>
                                {{ trans('messages.select_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-touch-desktop.svg" alt="touch icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>{{ trans('messages.transaction')}}</h4>

                            <p>
                                {{ trans('messages.transaction_msg_to') }}
                            </p>
                        </div><!-- .service-details end -->
                    </li>
                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-graph.svg" alt="touch icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>{{ trans('messages.balance_payments') }}</h4>
                            <p>
                                {{ trans('messages.balance_payments_msg') }}
                            </p>
                        </div><!-- .service-details end -->
                    </li>
                </ul><!-- .service-list-big-icons-details end -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02" style="margin-bottom:30px;">
                    <h2>Get in touch</h2>
                    <p>
                        Please fill your details and we would get back to you shortly.
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div>

    <!-- Request a callback Section -->
    <div class="container" id="tf">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div id="loader">
                    <img src="img/loader.gif" alt="loading" style="height:150px;width: 150px;">
                    <p>Please wait</p>
                </div>
                <form id="truckOwnersForm">
                    <p>Fields marked with * are required</p>

                    <!-- Name form field -->
                    <div class="form-group">
                        {!! Form::label('Name','* Name:') !!}
                        {!! Form::text('Name',null,['class'=>'form-control']) !!}
                    </div>

                    <!-- Phone form field -->
                    <div class="form-group">
                        {!! Form::label('Phone','* Phone(+91):') !!}
                        {!! Form::text('Phone',null,['class'=>'form-control']) !!}
                    </div>

                    <!-- Email form field -->
                    <div class="form-group">
                        {!! Form::label('Email','* Email:') !!}
                        {!! Form::text('Email',null,['class'=>'form-control']) !!}
                    </div>

                    <!-- Address form field -->
                    <div class="form-group">
                        {!! Form::label('Address','* Address:') !!}
                        {!! Form::textarea('Address',null,['class'=>'form-control', 'rows'=>5]) !!}
                    </div>
                    <!-- Submit button -->
                    <div class="form-group">
                        {!! Form::submit('Submit',['class'=>'btn btn-yellow form-control']) !!}
                    </div>
                </form>
                <div class="alert" id="truckOwnersFormAlert">
                </div>
                @section('scripts')
                    <script>
                        //Transporter form
                        $('#truckOwnersFormAlert').hide();
                        $('#loader').hide();
                        $('#truckOwnersForm').on('submit',function(e){
                            e.preventDefault();
                            $('#truckOwnersFormAlert').html("");
                            $('#truckOwnersForm').hide();
                            $('#loader').show();
                            $.ajax({

                                type    :   'POST',
                                url     :   '/forms/6',
                                data    :   $('#truckOwnersForm').serialize(),
                                success :   function(msg){
                                    $('#truckOwnersForm').slideUp(1000);
                                    $('#loader').hide();
                                    $('#truckOwnersFormAlert').append("<h3>"+msg.success+"</h3>");
                                    $('#truckOwnersFormAlert').append("<h4><a href='{{ url('truck-owners') }}'>Click here to submit another enquiry.</a></h4>");
                                    $('#truckOwnersFormAlert').show();
                                },
                                error   : function(xhr,status, response){
                                    var error = jQuery.parseJSON(xhr.responseText);  // this section is key player in getting the value of the errors from controller.
                                    console.log(error);
                                    $('#truckOwnersFormAlert').append('<ul>');
                                    for(var k in error.errors){
                                        if(error.errors.hasOwnProperty(k)){
                                            error.errors[k].forEach(function(val){
                                                $('#truckOwnersFormAlert').append('<li>' + val + '</li>');
                                            });
                                        }
                                    }
                                    $('#loader').hide();
                                    $('#truckOwnersForm').show();
                                    $('#truckOwnersFormAlert').show();
                                }
                            });
                        });
                    </script>
                @stop
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="img/pics/truckownercontact.png" alt="truck owner contact">
            </div>

        </div>
    </div>
@stop