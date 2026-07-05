<?php 

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResourcePages extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'value' 		=> $this->id,
			'text' 			=> $this->provider_display_name,
		    'pages'			=> $this->providerpages['id']

		];
    }
}
