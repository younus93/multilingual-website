<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\VarDumper\Caster\ResourceCaster;

class WebsiteController extends Controller
{

    function Form($fields)
    {
        $data = Input::all();

        $email_path = null;
        if ($fields == 3) {
            $rules = array(
                'Name' => 'required',
                'Phone' => 'required|max:10',
                'Email' => 'required|email',
            );
            $email_path = 'emails.home';
        } elseif ($fields == 5) {
            $rules = array(
                'Name' => 'required',
                'Company_Name' => 'required',
                'Phone' => 'required|max:10',
                'Email' => 'required|email',
                'Address' => 'required|max:255'
            );
            $email_path = 'emails.transporters';
        } elseif ($fields == 4) {
            $rules = array(
                'Name' => 'required',
                'Phone' => 'required|max:10',
                'Email' => 'required|email',
                'Message' => 'required|max:1024'
            );
            $email_path = 'emails.contact';
        }elseif ($fields ==6) {
            $rules = array(
                'Name' => 'required',
                'Phone' => 'required|max:10',
                'Email' => 'required|email',
                'Address' => 'required|max:1024'
            );
            $email_path = 'emails.truckowners';
        }

        $validator = Validator::make($data, $rules);
        $errors = $validator->errors();
        $errors = json_decode($errors);
        if ($validator->fails()) {
            return Response::json(array(
                'errors' => $errors
            ), 422); // 400 being the HTTP code for an invalid request.
        }
//        $data   =   array_add($data,'Sent_at',Carbon::now()->diffForHumans());


        Mail::queue($email_path, $data, function ($msg) {
            $msg->to(
                'info@truckjee.com', Input::get('Name')
            )->subject('New message from TruckJee Website');
        });


        Mail::queue('emails.thankyou', $data, function ($msg) {
            $msg->to(
                Input::get('Email'), Input::get('Name')
            )->subject('TruckJee Contact');
        });

        return Response::json(array('success' => 'Thank you for your interest. We would get back to you shortly.'), 200);

    }

    public function Lang($lang)
    {
        Session::put('locale',$lang);
        return redirect()->back();
    }

    public function submitform(Request $request)
    {

        $rules = array(
            'Name' => 'required',
            'Company_Name' => 'required',
            'Phone' => 'required|max:10',
            'Email' => 'required|email',
            'Address' => 'required|max:255'
        );


    }
}
