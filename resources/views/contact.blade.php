@extends('layouts.app')

@section('content')

    <div class="clearfix"></div>


    <div class="page-content">
    <div class="container">
        <div class="row" id="contact">
            <div class="col-md-6">
                <div class="custom-heading">
                    <h3>your inquiry</h3>
                </div><!-- .custom-heading.left end -->

                <!-- .contact form start -->
                <p>Fields marked with * are required</p>
                <form id="contactForm">
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

                    <!-- Message form field -->
                    <div class="form-group">
                        {!! Form::label('Message','* Message:') !!}
                        {!! Form::textarea('Message',null,['class'=>'form-control', 'rows'=>5]) !!}
                    </div>
                    <!-- Submit button -->
                    <div class="form-group">
                        {!! Form::submit('Submit',['class'=>'btn btn-yellow form-control']) !!}
                    </div>
                </form>

                <div id="contactFormAlert"></div>

                @section('scripts')
                    <script>
                        //Contact form
                        $('#contactFormAlert').hide();
                        $('#contactForm').on('submit',function(e){
                            e.preventDefault();
                            $('#contactFormAlert').html("");
                            $.ajax({

                                type    :   'POST',
                                url     :   '/forms/4',
                                data    :   $('#contactForm').serialize(),
                                success :   function(msg){
                                    $('#contactForm').slideUp(1000);
                                    $('#contactFormAlert').append("<h3>"+msg.success+"</h3>");
                                    $('#contactFormAlert').append("<h4><a href='{{ url('contact') }}'>Click here to submit another enquiry.</a></h4>");
                                    $('#contactFormAlert').show();
                                },
                                error   : function(xhr,status, response){
                                    var error = jQuery.parseJSON(xhr.responseText);  // this section is key player in getting the value of the errors from controller.
                                    console.log(error);
                                    $('#contactFormAlert').append('<ul>');
                                    for(var k in error.errors){
                                        if(error.errors.hasOwnProperty(k)){
                                            error.errors[k].forEach(function(val){
                                                $('#contactFormAlert').append('<li>' + val + '</li>');
                                            });
                                        }
                                    }
                                    $('#contactFormAlert').show();
                                }
                            });
                        });
                    </script>
                @stop
            </div><!-- .col-md-6 end -->

            <div class="col-md-6">
                <div class="custom-heading">
                    <h3>TruckJee headquarters</h3>
                </div><!-- .custom-heading end -->

                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1374.0021967394014!2d80.2135734726199!3d13.082379192272743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526420db2ff731%3A0xe7bf9c5b119a47ab!2sTruckJee!5e0!3m2!1sen!2sin!4v1451375635230" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

@stop