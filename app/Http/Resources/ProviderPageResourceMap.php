<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderPageResourceMap extends JsonResource 
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->sp_title_1,
		   	'text2'			=> $this->sp_title_2,
		    'lat'			=> $this->sp_gm_lat,//$this->providers['latitude'],
		    'long'			=> $this->sp_gm_long //$this->providers['longitude']
		];
    }
}
