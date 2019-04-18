<?php
use App\Customer;
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
    return view('home');
});

Route::post('/submit','SubmitController@store');
Route::get('/getall',function(){
	$customers = Customer::all();
	if(count($customers)==0)
		echo"<strong>No data</strong>";
	else{
	foreach ($customers as $customer) {
		echo "<p><strong>Name:</strong>".$customer->name."<br><strong>Pincode:</strong>".$customer->pincode."</p><br><br>";
	}
}
});

Route::get('/redirecttohome',function(){
	return view('home');
});