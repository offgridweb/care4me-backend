<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderAdminResourceList extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->provider_display_name,
            'email' 		=> $this->providermainuser['email'],
		    //'logo'			=> $this->provider_logo,
			'pages' 		=> $this->provider_listings(),
			//'user'			=> $this->users,
			'status'		=> $this->providerstatus->status,
			'status_text'	=> $this->providerstatus->status_text,
		    'created_at'	=> $this->created_at,
		    'updated_at'	=> $this->updated_at
		   

		];
    }
}
