<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderPageResourceAdmin extends JsonResource
{
   
   public function toArray($request) 
    {
       return [
			'value' 		=> $this->provider,
			'provider'		=> $this->providers->provider_display_name,
			'text' 			=> $this->sp_title_1,
		    'page' 			=> $this->id,
			'status'		=> $this->publishstates['status'],
			'status_text'	=> $this->publishstates['status_text'],
			'created_at'	=> $this->created_at,
		   	'updated_at'	=> $this->updated_at
		];
    }
} 
