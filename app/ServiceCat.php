<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ServiceCat extends Model 
{
	protected $table = "service_cats";
	
	public function providercats()
	{	
		return $this->hasMany('App\Provider', '', 'id')->withDefault(['text' => '-']);	
	} 
	
	public function countproviders($cat_id)
	{	
		$pages = [];
		$ppages = SPService::
			where('cat_id', $cat_id)
			->orWhere('parent_cat_id', $cat_id)	
			->pluck('sp_page_id');	
			//->get();
		
			foreach($ppages as $page){
					if(!in_array($page,$pages)){
					$pages[] = $page;
					}
				}
			 
			$pages = ProviderPage::
			 	whereIn('id',$pages)
				->pluck('id');
		
		$count = count($pages);
		return $count;	
	} 
}