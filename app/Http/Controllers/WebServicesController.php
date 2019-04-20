<?php


namespace App\Http\Controllers;
use App\Traits\MainTrait;
use Illuminate\Http\Request;
use App\submitController;
use Illuminate\Support\Facades\Log;

class WebServicesController extends Controller
{
	use MainTrait;
 	public function performAction(Request $request){
	    $obj = new WebServicesController();
	    if($obj->store($request))
	    	return response()->json((["message"=>"received details","status"=>1]));
	    else{
	            //log::debug('else block');
	    		//return view('error');
	    	return response()->json((["message"=>"data already exists","status"=>0]));
    	}
   }
}

?>
