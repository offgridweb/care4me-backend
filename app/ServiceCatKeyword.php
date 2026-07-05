<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 


class ServiceCatKeyword extends Model  
{
	protected $table = "service_cats_keywords";
	
	public function servicecats()
	{	
		return $this->hasOne('App\ServiceCatText', 'id', 'cat_id');//->withDefault(['text' => '-']);	
	} 
	
}