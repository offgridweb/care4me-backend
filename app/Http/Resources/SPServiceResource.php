<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SPServiceResource extends JsonResource
{
   
   public function toArray($request)
    {
       return [
			'id'	 		=> $this->id,
			'pageid' 		=> $this->sp_page_id,
		    'catid'			=> $this->cat_id,
		    'catname'		=> $this->servicecats['service_cat_name'],
		    'parentid'		=> $this->parent_cat_id,
		    'parentcatname'	=> $this->servicecatsparent['service_cat_name'],
		];
    }
}
