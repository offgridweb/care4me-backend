<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource; 

class BoroughResource extends JsonResource 
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->name,
		    'lat'			=> $this->latitude,
		    'lng'			=> $this->longitude
		];
    }
}
