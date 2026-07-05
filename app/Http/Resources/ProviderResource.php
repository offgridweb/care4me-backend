<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResource extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->provider_display_name,
		   	'show_map'		=> $this->provider_show_map,
			'add1' 			=> $this->provider_add1,
		   	'add2' 			=> $this->provider_add2,
		   	'add3' 			=> $this->provider_add3,
		    'postcode' 		=> $this->provider_postcode,
		    'phone'			=> $this->provider_phone,
		    'email'			=> $this->provider_email,
		    'website'		=> $this->provider_website,
		    'logo'			=> $this->provider_logo,
		    'latitude'		=> $this->latitude,
		    'longitude'		=> $this->longitude,
		    'user_contact'	=> $this->users['fname'].' '.$this->users['lname'],
		    'pages'			=> $this->providerpages,
		    'created_at'	=> date('d-m-Y H:m',strtotime($this->created_at)),
		    'updated_at'	=> date('d-m-Y H:m',strtotime($this->updated_at)),
		   

		];
    }
}
