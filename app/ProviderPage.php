<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ProviderPage extends Model 
{
	protected $table = "provider_pages";
	protected $primaryKey = 'id';
	
	protected $fillable = [
			'provider',
			'user_id',
			'sp_desc',		
			'sp_title_1',
			'sp_title_2',
			'sp_logo',
			'sp_tel',
			'sp_email',
            'sp_website',
			'sp_add1',
			'sp_add2',
			'sp_add3',
			'sp_add_postcode',
			'sp_gm_lat',
    		'sp_gm_long',
			'sp_status'
	];
	
	protected static function booted()
    {
        static::created(function ($page) {
            $page->providers()->increment('provider_listings');
        });

        static::deleted(function ($page) {
            $page->providers()->decrement('provider_listings');
        });
    }

	
	public function providers()
	{	
		return $this->hasOne('App\Provider', 'id', 'provider')->withDefault(['text' => '-']);	
	} 
	
	public function publishstates()
	{	
		return $this->hasOne('App\PublishState', 'status', 'sp_status')->withDefault(['text' => '-']);	
	} 
	
	public function spservices()
	{	
		return $this->hasMany('App\SPService', 'sp_page_id', 'id')->groupBy('parent_cat_id')->distinct();	
	} 
	
	public function getlogosize($logo){
		
		$size = [0,0];
		$logo = env('BASE_HOME').'/httpdocs/public/images/logos/'.$logo;
		
		if((File::exists($logo) && File::isFile($logo))){
			$size = getimagesize($logo);
			$size = array($size[0],$size[1]);
    		return $size;
			} 
		
		return $size;
		
	}
	
	public function users()
	{	
		return $this->hasOne('App\User', 'id', 'user')->withDefault(['text' => '-']);	
	} 
}