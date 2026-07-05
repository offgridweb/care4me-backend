<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderPageResource extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->sp_title_1,
		   	'text2'			=> $this->sp_title_2,
		    'page_desc'		=> $this->sp_desc,
		    'page_logo'		=> $this->sp_logo,
		    'logo_size'		=> $this->getlogosize($this->sp_logo),
		    'lat'			=> $this->sp_gm_lat,
		    'long'			=> $this->sp_gm_long,
		    'tel'			=> $this->sp_tel,
		    'email'			=> $this->sp_email,
		    'website'		=> $this->sp_website,
		    'add1'			=> $this->sp_add1,
		    'add2'			=> $this->sp_add2,
		    'add3'			=> $this->sp_add3,
		    'postcode'		=> $this->sp_add_postcode,
		   
		];
    }
}
