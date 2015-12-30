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
                                <a href="#">Not Found</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02" style="margin-bottom:30px;">
                    <h2>Oops! Page not found!</h2>
                    <p>
                        We appreciate your curiosity but our servers
                        say that the page you're looking for is not
                        available right now.
                        <br>
                        Please check back later.
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div>

@stop