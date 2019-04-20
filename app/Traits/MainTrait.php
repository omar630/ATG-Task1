<?php
namespace App\Http\Controllers;
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Validation;
use App\Customer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
trait MainTrait{
    public static function store(Request $request){
        //log::debug('before Validation');
	   $request->validate([
            'pincode' => 'required|regex:/^\d{6}$/',
            'email' => 'email',
    	]);
        //log::debug('passed Validation');


        $customers = Customer::where('name',$request->name)->where('pincode',$request->pincode)->get();
        log::debug($customers);
        if(count($customers)==0){
            $customer = new Customer;
        	$customer->name = $request->name;
        	$customer->pincode = $request->pincode;
            $customer->email = $request->email;
        	$customer->save();

            //log::info("User data stored with name:".$customer->name." email:".$customer->email);   

            Mail::raw('Hi,'.$customer->name.' we have received your details name:'.$customer->name.' pincode:'.$customer->pincode, function($message) use ($customer) {
                    $message->to($customer->email, $customer->name)->subject('ATG');
                    $message->from('7396omar@gmail.com','Mohammed Omar'); // $message->from(from,name(from));
                });
            if(Mail::failures()){
                log::error("EMAIL Not Sent To ".$customer->email);
            }
            //echo "Email Sent. Check your inbox.";
            else{
                log::info("EMAIL Sent To ".$customer->email);
            }
            return true;
        }
    	
    }
}
?>