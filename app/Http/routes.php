<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    return view('home');
});

Route::get('/about-us', function(){
    return view('about');
});

Route::get('/transporters', function(){
//    $errors = null;
    return view('transporters');
});

Route::post('/forms/{fields}','WebsiteController@Form');


Route::get('/truck-owners',function(){
   return view('truckowners');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/blog',function(){
   return view('404');
});

Route::get('/mail','WebsiteController@mail');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
