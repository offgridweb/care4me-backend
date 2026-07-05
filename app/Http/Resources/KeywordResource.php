<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KeywordResource extends JsonResource 
{
   
   public function toArray($request)
    {
       return [
			'id' 			=> $this->cat_id,
			'text' 			=> $this->servicecats['text'],
		];
    }
}
