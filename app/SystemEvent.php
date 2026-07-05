<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SystemEvent extends Model 
{
	protected $table = "system_events"; 
	
	protected $fillable = [
		'type',
		'provider_id',
		'listing_id',
		'status',
		'user',
		];
	
	public function providers()
	{	
		return $this->hasOne('App\Provider', 'id', 'provider_id')->withDefault(['text' => '-']);	
	}
	
	public function listings()
	{	
		return $this->hasOne('App\ProviderPage', 'id', 'listing_id')->withDefault(['text' => '-']);	
	} 
	
	public function users()
	{	
		return $this->hasOne('App\User', 'id', 'user')->withDefault(['text' => '-']);	
	} 
	
	public function types()
	{	
		return $this->hasOne('App\SystemEventType', 'id', 'type')->withDefault(['text' => '-']);	
	} 
		
}