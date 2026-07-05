<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceCatResource extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->service_cat_id,
			'text' 			=> $this->service_cat_name,
		    'image'			=> $this->service_cat_image,
		   	'icon'			=> $this->service_cat_icon,
		    'count'			=> 0,//$this->countproviders($this->service_cat_id),
		    'selected'		=> 0
		];
    }
}
