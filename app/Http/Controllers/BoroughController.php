<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Borough;
use App\Http\Controllers\Controller;
use App\Http\Resources\BoroughResource as BoroughResource; 

class BoroughController extends Controller
{

	 public function index(Request $request)
    {
		
        $areas = Borough::
		orderBy('name','ASC')
		->get();
		
		 return array('boroughs'=>BoroughResource::collection($areas));
	}
  
	 public function store(Request $request)
    {
		
        $base = $request->isMethod('put') ? Borough::findorfail($request->value) : new Provider;
		$base->id = $request->value;
		$base->title = $request->text;
		$base->client = $request->client;
		$base->save();
		return new BoroughResource($base);
	}

   
    public function show($id)
    {
        $base = Borough::findorfail($id);
		return new BoroughResource($base);
    }


    public function destroy($id)
    {
        $base = Borough::findorfail($id);
		if($base->delete()){
			return new BoroughResource($base);
		}
    }
	
}
