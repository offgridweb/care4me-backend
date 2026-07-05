<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SPService extends Model  
{
	protected $table = "sp_services";
	
	public function providerpages()
	{	
		return $this->hasMany('App\ProviderPage', 'id', 'id');	
	} 
	
	public function providers()
	{	
		return $this->hasOne('App\Provider', 'id', 'sp_id');	
	} 
	
	public function servicecats()
	{	
		return $this->hasOne('App\ServiceCat', 'service_cat_id', 'cat_id');	
	} 
	
	public function servicecatsparent()
	{	
		return $this->hasOne('App\ServiceCat', 'service_cat_id', 'parent_cat_id');	
	} 


	
}
