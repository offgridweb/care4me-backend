<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderPageResourceFull extends JsonResource
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
		    'add1'			=> $this->sp_add1,
		    'add2'			=> $this->sp_add2,
		    'add3'			=> $this->sp_add3,
		    'postcode'		=> $this->sp_add_postcode,
		    'tel'			=> $this->sp_tel,
		   	'email'			=> $this->sp_email,
		   	'website'		=> $this->sp_website,
		    'gm_lat'		=> $this->sp_gm_lat,
		    'gm_long'		=> $this->sp_gm_long,
		    'user'			=> $this->users['email'],
		    'publish'		=> $this->publishstates['status'],
		    'publishtext'	=> $this->publishstates['status_text'],
		    'publishcolor'	=> $this->publishstates['color'],
		    'created'		=> date('d M y H:i',strtotime($this->created_at)),
		    'updated'		=> date('d M y H:i',strtotime($this->updated_at)),
		    'pcolor'		=> $this->publishstates['color'],
		    //'cats'			=> ($this->spservices), 
		    
		];
    }
}
