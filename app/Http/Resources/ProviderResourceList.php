<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResourceList extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->provider_display_name,
		    'lat'			=> $this->latitude,
		    'long'			=> $this->longitude
		];
    }
}
