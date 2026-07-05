<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VolunteerWanted;
use App\VolunteerPosition;

use App\Http\Controllers\Controller;
use App\Http\Resources\VolunteerResource as VolunteerResource;

class VolunteersWantedController  extends Controller
{

	public function index (Request $request){
		
			$id = $request->id;
		
			$vols = VolunteerWanted::
	   		where('status',1)
			->when($id > 0, function ($q) use($id) {
					return $q->where('id',$id);
			})
			->orderBy('id','DESC')	
			->limit(40)
			->get();
		
			return array('Volunteers'=>VolunteerResource::collection($vols));		
	}
	
	
	public function updateposition (Request $request){
		
		$request = (object)$request->data;
		$id = $request->value;
		
		$position = VolunteerWanted::where('id',$id)->first();
		if($position == null){
			$position = new VolunteerWanted;
		}
		$position->sp_id = $request->provider_id; 
		$position->add1 = $request->add1;
		$position->add2 = $request->add2;
		$position->add3 = $request->add3;
		$position->postcode = $request->postcode;
		$position->website = $request->website;
		$position->email = $request->email;
		$position->title = $request->text;
		$position->desc = $request->desc;
		$position->latitude = $request->latitude;
		$position->longitude = $request->longitude;
		$position->date_start = $request->start;
		$position->date_end = $request->end;
		$position->save();
		
		$posavail = VolunteerPosition::where('vol_id',$position->id)->delete();
		
		foreach($request->daytimes as $time){
				$pos = new VolunteerPosition;
				$pos->vol_id = $position->id;
				$pos->time_val = $time;
				$pos->status = 1;
				$pos->save();
		}
		
		return $position;
	}
	
}
