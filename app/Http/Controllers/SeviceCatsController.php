<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCat;
use App\Http\Controllers\Controller;

class ServiceCatsController extends Controller 
{

	
   public function index(Request $request)
    {
	   $id = $request->id;
	   $stext = $request->stext;
	   
	   $cats = ServiceCat::
	   		when($id > 0, function ($q) use($id) {
					return $q->where('id',$id);
			})
			->when($stext != '', function ($q) use ($stext){
    			return $q->where('service_cat_name','LIKE','%'.$stext.'%');
			})	
			->orderBy('service_cat_name','ASC')
		 	->get();
	   
	   return array('cats'=>$cats);//
    }
	
	
    public function store(Request $request)
    {
		
        $base = $request->isMethod('put') ? ServiceCat::findorfail($request->value) : new ServiceCat;
		$base->id = $request->value;
		$base->title = $request->text;
		$base->client = $request->client;
		$base->save();
		return new ServiceCatResource($base);
	}

   
    public function show($id)
    {
        $base = ServiceCat::findorfail($id);
		return new ServiceCatResource($base);
    }


    public function destroy($id)
    {
        $base = ServiceCat::findorfail($id);
		if($base->delete()){
			return new ServiceCatResource($base);
		}
    }
	
}
