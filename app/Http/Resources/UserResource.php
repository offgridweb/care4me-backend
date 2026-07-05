<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource 
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->fname.' '.$this->lname,
		    'fname'			=> $this->fname,
		    'lname'			=> $this->lname,
		    'email'			=> $this->email,
		    'provider'		=> $this->provider,
		    'last_login'	=> $this->last_login
		 
		];
    }
}
