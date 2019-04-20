<?php

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('form',function(){
	return view('home');
});

Route::post('submit','WebServicesController@performAction');

Route::get('form/redirecttohome',function(){
	return view('home');
});

Route::get('/update',function(){
    return response()->json("test");
});