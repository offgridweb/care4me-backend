<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceCatResource2 extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->service_cat_id,
			'text' 			=> $this->service_cat_name //.' ('.$this->countproviders($this->service_cat_id).')',
		];
    }
}
