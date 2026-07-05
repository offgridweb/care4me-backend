<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\User;

class CheckAccess
{
    public function handle(Request $request, Closure $next)
    {
        $requestType = $request->method();
		
		$user = User::where('id',$request->userid)->where('token',$request->token)->first();
		
		if($user != null){
			
			switch($user->role){
				case 9:
					// Sys admin
					$userdata = array('role'=>9);
				break;
				case 2:
					// System process
					$userdata = [];
				break;	
			}
			
			$user->last_active = date('Y-m-d H:i:s');
			$user->save();
			
			if($requestType = 'GET'){
				$request->merge($userdata);
				return $next($request);
			} else {
				$postData = $request->all();
				$requestData = array_merge($postData, $userdata);
				return  response()->json($requestData);
				}
		} else return 'NOT AUTHORISED';
    }
}
