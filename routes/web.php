<?php
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
	if(count($customers)==0){
		echo"<strong>No data</strong>";
	}
	else{
		foreach ($customers as $customer) {
			echo "<p><strong>Name:</strong>".$customer->name."<br><strong>Pincode:</strong>".$customer->pincode."<br><strong>Email:</strong>".$customer->email."<br><br></p>";
		}
	}
});

Route::get('/redirecttohome',function(){
	return view('home');
});
//Route::get('/send','SubmitController@basic_email');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
?>

