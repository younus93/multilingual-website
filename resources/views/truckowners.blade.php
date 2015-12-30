@extends('layouts.app')

@section('content')

    <div class="page-title-style02 pt-bkg01">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>

                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            <li>
                                <a href="#">Truck Owners</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>Immense need for Transportation providers</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        Indian Government's Make in India policy has motivated and facilitated
                        Indian manufacturing companies to manufacture and distribute products
                        for local consumption in addition to products manufactured for export.
                         This has triggered a change in the supply chain
                        management process of various companies who are now in heavy need for
                        transportation services.
                        <br/>
                        Below are a few facts
                    </p>

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            About 65% of cargo shipped within the country is shipped on road.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            The number of trucks annually increase by 9% every year.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Seasonal loads have reduced. All products are available all year long.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Indian National Highway is set to increase by 7000 kms by the end of 2016.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Clients require value addition to their existing transport services.
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            Opportunity to serve any region across the country.
                        </li>
                    </ul><!-- .fa-ul end -->

                    <p>
                        These are the indications that the market is maturing and
                        now is the right time to change the way road transportation works.As traditional truck owners, you can stop worrying about finding loads
                        for your trucks and let us ensure that you are provided with exhaustive
                        opportunities to find loads for your trucks in whichever region your truck
                        is currently plying empty.
                    </p>

                </div><!-- .col-md-6 end -->

                <div class="col-md-6 animated triggerAnimation" data-animate="zoomIn">
                    <img src="img/pics/warehouse.jpg" alt=""/>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02" style="margin-bottom:30px;">
                    <h2>TruckJee finds loads</h2>
                    <p>
                        Run your trucks full all year long
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="img/pics/warehouse.jpg" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="custom-heading">
                    <h2>Making it simple</h2>
                </div><!-- .custom-heading end -->
                <p class="text-big">
                    We offer matching loads for your trucks at their current location through our
                    highly optimized business distribution network.
                </p>
                <p>
                    TruckJee finds you the best loads available from multiple transporters
                    around you at the shortest time possible.
                </p>
                <ul class="service-list-big-icons-details">
                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-delivery-2.svg" alt="checklist icon"/>
                        </div><!-- .icon-container end -->



                        <div class="service-details">
                            <h4>Notify empty</h4>

                            <p>
                                Log into TruckJee's online application/smartphone app and mark
                                the status of your vehicle as empty.
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-map-1.svg" alt="clock icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>Get Loads</h4>

                            <p>
                                We notify you of multiple load information
                                available near your vehicle's current location which
                                matches the type of cargo your vehicle can carry.
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-globe-9.svg" alt="truck icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>Selection and Quote</h4>

                            <p>
                                Select which load you wish to transport and quote
                                your rate to the transporter.
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-touch-desktop.svg" alt="touch icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>Transaction</h4>

                            <p>
                                On approval of the business opportunity,
                                place the truck at the loading point and start your business transaction.
                            </p>
                        </div><!-- .service-details end -->
                    </li>
                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn" src="img/svg/pi-graph.svg" alt="touch icon"/>
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>Balance Payments</h4>

                            <p>
                                On completion of the transaction, TruckJee facilitates to help you
                                get your balance payments from the transporter.
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
                <p>Fields marked with * are required</p>
                <form id="truckOwnersForm">
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
                        $('#truckOwnersForm').on('submit',function(e){
                            e.preventDefault();
                            $('#truckOwnersFormAlert').html("");
                            $.ajax({

                                type    :   'POST',
                                url     :   '/forms/6',
                                data    :   $('#truckOwnersForm').serialize(),
                                success :   function(msg){
                                    $('#truckOwnersForm').slideUp(1000);
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
                                    $('#truckOwnersFormAlert').show();
                                }
                            });
                        });
                    </script>
                @stop
            </div>
            <div class="col-md-6 col-sm-6">
            </div>

        </div>
    </div>
@stop