@extends('layouts.app')

@section('content')

    <div class="clearfix"></div>

    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="custom-heading">
                        <h2>Apply at info@truckjee.com</h2>
                    </div>
                    <div class="custom-heading">
                        <h3>{{ trans('messages.careers_heading') }}</h3>
                    </div><!-- .custom-heading end -->

                    <div class="accordion careers">
                        <div class="title active">
                            <a href='#' class="clearfix">
                                <span class='job-position'>{{ trans('messages.sde') }}</span>
                                <span class='job-place'>{{ trans('messages.skills') }}</span>
                            </a>
                        </div><!-- .title end -->

                        <div class="content clearfix">
                            <h4>{{ trans('messages.job_summary') }}</h4>
                            <p>
                                {{ trans('messages.job_summary_msg') }}
                            </p>
                            <br />

                            <h4>Our Expectation</h4>

                            <ul class='fa-ul'>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.r1') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.r2') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.r3') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.r4') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.r5') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.r6') }}
                                </li>
                            </ul><!-- .fa-ul end -->

                            <br />

                        </div><!-- .content end -->

                        <div class="title">
                            <a href='#' class="clearfix">
                                <span class='job-position'>{{ trans('messages.bd') }}</span>

                            </a>
                        </div><!-- .title end -->

                        <div class="content clearfix">

                            <h4>Our Expectation</h4>

                            <ul class='fa-ul'>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.bd1') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.bd2') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.bd3') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.bd4') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.bd5') }}
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    {{ trans('messages.bd6') }}
                                </li>
                            </ul><!-- .fa-ul end -->
                            <br />

                            <h4>Skill Set Required:</h4>


                            <ul class='fa-ul'>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Must be extremely effective at initiating high-level contacts in the Industry and have strong presentation skills to close the account.
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Must have creativity and ingenuity in developing successful business strategies; have a working knowledge of the Ticketing industry along with a pulse of how to track what is forthcoming in the industry.
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Must have the ability to generate leads and build business in a wide-open market.
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Must have a working knowledge of the Transportation Industry.
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Must maintain quality of sales and ensure the best productivity standards.
                                </li>


                            </ul><!-- .fa-ul end -->


                        </div><!-- .content end -->


                    </div><!-- .accordion.careers end -->
                </div><!-- .col-md-9 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@stop