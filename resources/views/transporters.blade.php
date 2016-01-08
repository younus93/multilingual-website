@extends('layouts.app')

@section('content')

    <div class="clearfix"></div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.the_complete_solution') }}</h2>
                    </div>
                    <p class="text-big">
                       {{ trans('messages.the_complete_solution_heading') }}
                    </p>

                    <p>
                        {{ trans('messages.the_complete_solution_msg') }}
                    </p>

                </div><!-- .col-md-8 end -->

                <div class="col-md-4 custom-bkg bkg-light-blue">
                    <h3>{{ trans('messages.extra_mile') }}</h3>

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.q1') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.q2') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.q3') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.q4') }}
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-4.custom-bkg end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-6 clearfix">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.step_by_step') }}</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="service-list-big-icons-details">
                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-checklist-2.svg" alt="checklist icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>{{ trans('messages.requirement') }}</h4>

                                <p>
                                    {{ trans('messages.requirement_msg') }}
                                </p>
                            </div><!-- .service-details end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-clock.svg" alt="clock icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>{{trans('messages.auction')}}</h4>

                                <p>
                                    {{ trans('messages.auction_msg') }}
                                </p>
                            </div><!-- .service-details end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-truck-1.svg" alt="truck icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>{{ trans('messages.selection') }}</h4>

                                <p>
                                    {{ trans('messages.selection_msg') }}
                                </p>
                            </div><!-- .service-details end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-touch-desktop.svg" alt="touch icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h4>{{ trans('messages.transaction') }}</h4>

                                <p>
                                    {{ trans('messages.transaction_msg') }}
                                </p>
                            </div><!-- .service-details end -->
                        </li>
                    </ul><!-- .service-list-big-icons-details end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 custom-bkg bkg-light-blue">
                    <div class="custom-heading">
                        <h2>{{trans('messages.your_benefits') }}</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        {{trans('messages.your_benefits_msg') }}
                    </p>

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b1') }}
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b2') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b3') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b4') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b5') }}
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b6') }}
                        </li>
                       <li>
                           <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b7') }}
                       </li>
                       <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            {{ trans('messages.b8') }}
                       </li>

                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02" style="margin-bottom:30px;">
                    <h2>{{ trans('messages.get_in_touch') }}</h2>
                    <p>
                        {{ trans('messages.get_in_touch_msg') }}
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div>

    <!-- Request a callback Section -->
    <div class="container" id="tf">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="img/pics/transporter.png" alt="transporter">
            </div>
            <div class="col-md-6 col-sm-6">
                <div id="loader">
                    <img src="img/loader.gif" alt="loading" style="height:150px;width: 150px;">
                    <p>Please wait</p>
                </div>
                <form id="transportersForm">
                    <p>Fields marked with * are required</p>
                    <!-- Name form field -->
                    <div class="form-group">
                        {!! Form::label('Name','* Name:') !!}
                        {!! Form::text('Name',null,['class'=>'form-control']) !!}
                    </div>

                    <!-- Company Name form field -->
                    <div class="form-group">
                        {!! Form::label('Company Name','* Company Name:') !!}
                        {!! Form::text('Company_Name',null,['class'=>'form-control']) !!}
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
                <div class="alert" id="transportersFormAlert">
                </div>

            </div>
        </div>
    </div>
@stop

@section('scripts')

    <script>
        //Transporter form
        $('#transportersFormAlert').hide();
        $('#loader').hide();
        $('#transportersForm').on('submit',function(e){
            e.preventDefault();
            $('#transportersForm').hide();
            $('#loader').show();
            $('#transportersFormAlert').html("");
            $.ajax({

                type    :   'POST',
                url     :   '/forms/5',
                data    :   $('#transportersForm').serialize(),
                success :   function(msg){
                    $('#transportersForm').slideUp(1000);
                    $('#loader').hide();
                    $('#transportersFormAlert').append("<h3>"+msg.success+"</h3>");
                    $('#transportersFormAlert').append("<h4><a href='{{ url('transporters') }}'>Click here to submit another enquiry.</a></h4>");
                    $('#transportersFormAlert').show();
                },
                error   : function(xhr,status, response){
                    var error = jQuery.parseJSON(xhr.responseText);  // this section is key player in getting the value of the errors from controller.
                    console.log(error);
                    $('#transportersFormAlert').append('<ul>');
                    for(var k in error.errors){
                        if(error.errors.hasOwnProperty(k)){
                            error.errors[k].forEach(function(val){
                                $('#transportersFormAlert').append('<li>' + val + '</li>');
                            });
                        }
                    }
                    $('#loader').hide();
                    $('#transportersForm').show();
                    $('#transportersFormAlert').show();
                }
            });
        });
    </script>


@stop