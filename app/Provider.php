<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Provider extends Model 
{
	protected $table = "providers";
	
	protected $fillable = [
        'provider_display_name',
        'provider_contact',
		'user',
        'provider_phone',
        'provider_email',
        'provider_website',
        'provider_add1',
        'provider_add2',
        'provider_add3',
        'provider_postcode',
        'latitude',
        'longitude',
		'provider_status',
		'provider_logo',
		'provider_archive'
    ];
	
	
	public function providerpages()
	{	
		return $this->hasOne('App\ProviderPage', 'provider', 'id')->withDefault(['text' => '-']);	
	}
	
	public function provider_listings(){
		return $this->hasMany('App\ProviderPage', 'provider', 'id')->count();
	}
	
	public function users()
	{	
		return $this->hasOne('App\User', 'id', 'user')->withDefault(['text' => '-']);	
	} 
	
	
	public function providerstatus()
	{
	return $this->hasOne('App\ProviderState', 'status', 'provider_status')->withDefault(['text' => '-']);
	}
	public function setstatustext($status){
		$text = '??';
		switch($status){
			case 0:
			$text = 'Waiting for approval';
			break;
			case 1:
			$text = 'Approved';
			break;
		}
		return $text;
	}

	
}
