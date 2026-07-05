<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SystemEventResource extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'type' 			=> $this->type,
		    'type_text'		=> $this->types['name'],
		   	'provider_id'	=> $this->provider_id,
		    'provider_text' => $this->providers['provider_display_name'],
		    'listing'		=> $this->listing_id,
		    'user'			=> $this->users['email'],
		    'status'		=> $this->status,
		   	'date'			=> date('d M y H:i',strtotime($this->created_at)),
		];
    }
}
