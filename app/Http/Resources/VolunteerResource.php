<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VolunteerResource extends JsonResource
{
   
   public function toArray($request) 
    {
       return [
		   'daytimes'		=> $this->voltimes(),
			'value' 		=> $this->id,
			'text' 			=> $this->title,
		   	'desc'			=> $this->desc,
		   	'add1'			=> $this->add1,
		    'add2'			=> $this->add2,
		    'add3'			=> $this->add3,
		    'postcode'		=> $this->postcode,
		    'phone'			=> $this->phone,
		    'website'		=> $this->website,
		    'email'			=> $this->email,
		    'latitude'		=> $this->latitude,
		    'longitude'		=> $this->longitude,
		   	'start'			=> date('d-m-Y',strtotime($this->date_start)),
		    'end'			=> date('d-m-Y',strtotime($this->date_end)),
		    'posted'		=> date('d M Y',strtotime($this->updated_at)),
		    'provider_id'	=> $this->sp_id,
		    'provider'		=> $this->providers,
		    
		    
		];
    }
}
