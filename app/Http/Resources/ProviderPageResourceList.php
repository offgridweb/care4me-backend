<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderPageResourceList extends JsonResource
{
   
   public function toArray($request) 
    {
       return [
			'value' 		=> $this->provider,
			'text' 			=> $this->sp_title_1,
		    'page' 			=> $this->id,
		];
    }
}
