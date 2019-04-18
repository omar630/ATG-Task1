<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation;
use App\Customer;
class SubmitController extends Controller
{
	/*
		this function first validates the given feild values if it satisfies 
		then check whether the given values exists in database if does not exists it insert into database else show an error
	*/
    public function store(Request $request){

    	$request->validate(
    		['name' => 'required|regex:/^[a-zA-Z_ ]*$/',
    		'pincode' => 'required|digits:6|numeric',
    	]);


    	$customers = Customer::where('name',$request->name)->where('pincode',$request->pincode)->get();
    	if(count($customers)==0){
    	    //$messages = Customer::where('name',$request->name)->orderBy('id','desc')->get();
    	    $customer = new Customer;
    	    $request->validate(
    	    	['name' => 'required|regex:/^[a-zA-Z_ ]*$/',
    	    	'pincode' => 'required|digits:6|numeric',
    	    ]);

    	    $customer->name = $request->name;
    	    $customer->pincode = $request->pincode;
    	    $customer->save();
    	    return view('success');
    	    //return view('home');
    	}
    	else{
    		return view('error');
    	}
    }
}
