<?php
namespace App\Http\Controllers;
use App\Traits\MainTrait;
use Illuminate\Http\Request;
/*use Illuminate\Validation;
use App\Customer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;*/
class SubmitController extends Controller
{
	/*
		this function first validates the given feild values if it satisfies 
		then check whether the given values exists in database if does not exists it insert into database else show an error
	*/
    use MainTrait;
    public function performAction(Request $request){
        $obj = new SubmitController();
        if($obj->store($request)){
            return view('success');
        }
        else{
            //log::debug('else block');
            return view('error');
        }
   }
}
