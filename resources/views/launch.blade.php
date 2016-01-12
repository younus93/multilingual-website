@extends('layouts.app')

@section('content')
    <div class="clearfix"></div>

    <div class="page-content">
        <div class="container">
            <div class="row launch">
                    <div class="custom-heading">
                        <h2>{{ trans('messages.launch') }}</h2>
                    </div>
                    <p class="text-big">
                        {{ trans('messages.launch_date') }}
                    </p>
            </div>
            <div class="row launch">
                    <p>
                        {{ trans('messages.para1') }}
                    </p>
                    <p>
                        {{ trans('messages.para2') }}
                    </p>
            </div>
            <div class="row launch">
                <div class="col-md-4">
                    <img src="img/launch/2.jpg" alt="chief minsiter">
                    <p>Late Chief Minister Mr. Mufti Mohammed Sayeed launching TruckJee</p>
                </div>
                <div class="col-md-4">
                    <img src="img/launch/1.jpg" alt="stall">
                    <p>TruckJee launchpad at United Economic Forum Trade Summit</p>
                </div>
                <div class="col-md-4">
                    <img src="img/launch/3.jpg" alt="memento">
                    <p>TruckJee founders presenting the Chief Minister with TruckJee memento.</p>
                </div>
            </div>
            <div class="row launch">
                <p>
                    {{ trans('messages.para3') }}
                </p>
                <p>
                    {{ trans('messages.para4') }}
                </p>
            </div>
            <div class="row launch">
                <div class="col-md-4">
                    <img src="img/launch/5.jpg" alt="president" class="img-responsive">
                    <p>Founder of Coal and Oil Group, Mr. Ahmed A.R Buhari</p>
                </div>
                <div class="col-md-4">
                    <img src="img/launch/4.jpg" alt="professional courier" class="img-responsive">
                    <p>Founder of Professional Couriers</p>
                </div>
                <div class="col-md-4">
                    <img src="img/launch/6.jpg" alt="memento" class="img-responsive">
                    <p>Mr. Ahmed Buhari honored by TruckJee.</p>
                </div>
            </div>
        </div>
    </div>


@stop