<?php

//use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailJob;
//use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id}', function ($id) {
	echo $id;
    return view('first');
});

Route::get('/sendmail',function(){
//Mail::to('yshmca.120@gmail.com')-->send(new SendEmailMailable());
$job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(10));
   dispatch($job);

  // dispatch(new SendEmailJob());
   
    dd("Email is Sent.");
});

Route::get('my/{id}','user@index');

