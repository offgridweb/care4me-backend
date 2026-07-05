<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class VolunteerWanted extends Model  
{
	protected $table = "volunteers_wanted";
	
	
	public function providers()
	{	
		return $this->hasOne('App\Provider', 'id', 'sp_id')->withDefault(['text' => '-']);		
	} 
	
	
	public function voltimes()
	{	
//		return $this->hasMany('App\VolunteerPosition', 'vol_id', 'vol_id');	
		$pos = VolunteerPosition::
			where('vol_id',$this->id)
			->pluck('time_val');
	
		return $pos;
	}  
	
	
	
}
