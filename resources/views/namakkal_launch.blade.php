@extends('layouts.app')

@section('content')
    <div class="clearfix"></div>

    <div class="page-content">
        <div class="container">
            <div class="row launch">
                <div class="custom-heading">
                    <h2>{{ trans('messages.namakkal_launch') }}</h2>
                </div>
                <p class="text-big">
                    {{ trans('messages.namakkal_launchdate') }}
                </p>
            </div>
            <div class="row launch">
                <p>
                    {{ trans('messages.namakkal_para1') }}
                </p>
                <p>
                    {{ trans('messages.namakkal_para2') }}
                </p>
            </div>
            <div class="row launch">
                <div class="col-md-4">
                    <img src="img/namakkal_launch/7.jpg" alt="chief minsiter">
                    <p>N.T.L.O.A president Mr.Vangilee inaugurating TruckJee</p>
                </div>
                <div class="col-md-4">
                    <img src="img/namakkal_launch/5.jpg" alt="stall">
                    <p>TruckJee Founder warmly welcomes the N.T.L.O.A Secretary.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/namakkal_launch/1.jpg" alt="memento">
                    <p>N.T.L.O.A president launching Truckjee. </p>
                </div>
            </div>
            <div class="row launch">
                <p>
                    {{ trans('messages.namakkal_para3') }}
                </p>
                <p>
                    {{ trans('messages.namakkal_para4') }}
                </p>
                <p>
                    {{ trans('messages.namakkal_para5') }}
                </p>
            </div>
            <div class="row launch">
                <div class="col-md-4">
                    <img src="img/namakkal_launch/24.jpg" alt="president" class="img-responsive">
                    <p>TruckJee founders presenting the N.T.L.O.A president Mr.Vangilee with TruckJee memento.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/namakkal_launch/22.jpg" alt="professional courier" class="img-responsive">
                    <p>Lorry Owner receving Truckjee Welcome Kit from N.T.L.O.A president and secretary.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/namakkal_launch/4.jpg" alt="memento" class="img-responsive">
                    <p>N.T.L.O.A President,Secretary and Treasurer  having discussion with the Founder and Director </p>
                </div>
            </div>
        </div>
    </div>


@stop