<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function track($imei, $vehicle_number)
    {
        $data = DB::table($imei)->orderBy('id','desc')->first();
        $location = $this->client->get(
            'http://nominatim.openstreetmap.org/reverse?'.
            'format=json'.
            '&lat='.$data->lat.
            '&lon='.$data->long.
            '&zoom=18'.
            '&addressdetails=0'
        );
        $location = (json_decode($location->getBody()->getContents())->display_name);
        $last_udpated = Carbon::parse($data->server_time)->diffForHumans();
        return view('plot')->with([
            'lat'   =>  $data->lat,
            'long'  =>  $data->long,
            'vehicleNumber' =>  $vehicle_number,
            'location'      =>  $location,
            'last_updated'  =>  $last_udpated
        ]);
    }
}
