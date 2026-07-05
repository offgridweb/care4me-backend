<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCat;
use App\ServiceCatText;
use App\SPService;
use App\ServiceCatKeyword;
use App\Provider;
use App\ProviderPage;
use App\Borough;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceCatResource as ServiceCatResource;
use App\Http\Resources\ServiceCatResource2 as ServiceCatResource2;
use App\Http\Resources\KeywordResource as KeywordResource;
use App\Http\Resources\ProviderResourcePages as ProviderResourcePages;
use App\Http\Resources\ProviderResourceList as ProviderResourceList;
use App\Http\Resources\ProviderPageResourceList as ProviderPageResourceList;
use App\Http\Resources\ProviderPageResource as ProviderPageResource;
use App\Http\Resources\ProviderPageResourceMap as ProviderPageResourceMap;
use App\Http\Resources\BoroughResource as BoroughResource;
use DB;

class ServiceCatsController extends Controller 
{

	
	
   public function index(Request $request)
    {
	   $id = $request->id;
	   $parent = $request->parent;
	   $stext = $request->stext;
	   
	   if($request->buttons == 1){
		    $cats = ServiceCat::
		   		where('service_cat_id','>',1)
	   			->where('service_cat_parent',1)
				->orderBy('service_cat_name','ASC')
		 		->get();
		   
	   } else {
	   $cats = ServiceCat::
	   		when($id > 0, function ($q) use($id) {
					return $q->where('id',$id);
			})
			->when($parent > 0, function ($q) use($parent) {
					return $q->where('service_cat_parent',$parent);
			})	
			->when($stext != '', function ($q) use ($stext){
    			return $q->where('service_cat_name','LIKE','%'.$stext.'%');
			})
			->where('service_cat_id','!=',1)	
			->orderBy('service_cat_name','ASC')
		 	->get();
	   
	   }
	   
	 
	    return array('cats'=>ServiceCatResource::collection($cats));//
		   
		   
    }
	
	public function indexall(Request $request)
    {
	
	   	$parents = ServiceCat::select('service_cat_id','service_cat_name')
			->where('service_cat_id','>',1)
	   		->where('service_cat_parent',1)		
			->orderBy('service_cat_name','ASC')
		 	->get();
	   
	   
		
		foreach($parents as $parent){
			
			$childs = ServiceCat::select('service_cat_id','service_cat_name')
			->where('service_cat_parent','>',1)
	   		->where('service_cat_parent',$parent->service_cat_id)	
			->orderBy('service_cat_name','ASC')
		 	->get()
			->toArray();
			
			$results[] = array('parent'=>$parent,'childs'=>$childs);
			
			
		}	
		
		$areas = Borough::orderBy('name','asc')->get();
	    return array('cats'=>($results),'areas'=>BoroughResource::collection($areas));//
		
		return $results;
		
	   	return array('cats'=>ServiceCatResource::collection($cats));//
		   
		   
    }
	
	public function indexcatstextsearch(Request $request){
		
		$pages = [];
		$pages2 = [];
		$loop = 0;
		$words = explode(' ',$request->stext);
		
		
		foreach($words as $word){
			
			$cats = ServiceCat::
	   		where('service_cat_name','LIKE','%'.$word.'%')
			->orderBy('service_cat_name','ASC')
			
			->pluck('service_cat_id')	
			->toArray();
				
			if($loop == 0){
					$pages = $cats;
			} // Add all 1st pass
			
				else {
				
					foreach($cats as $cat){
						// If page already in list
						if(in_array($cat,$pages)){$pages2[] = $cat;}
						}
						
					if(count($pages2) > 0 ){
							$pages = $pages2;
							$pages2 = [];
						} else $pages = [];
							
					} 
					
				$loop++;
				
		} // end word loop
		
		
	
		//return $cats;
		
		$cats = ServiceCat::whereIn('service_cat_id',$cats)->get();
		
		return array('cats'=>ServiceCatResource2::collection($cats));//
		
			
	}
	
	public function indexcatstext(Request $request)
    {
		
	  	$lang = null;
		$stext = $request->stext;
		$catid = $request->cat;
		$page = $request->page;
		$limit = $request->limit;
	  	$offset = $limit * $page;
		$words = explode(' ',$stext);
	   	$range = $request->range;
		if($range == 0){$range = 200;}
		
		$area = $request->area;
		
		if($area !== ''){
			$area = json_decode($area);
			$latFrom = $area->lat;
			$lonFrom = $area->lng;
		} else {
			$latFrom = null;
			$lonFrom = null;
		} 
		
		
		$pages = [];
		$pages2 = [];
		$loop = 0;
		$filtermappages = [];
		$filterpages = [];
		
		$page = $request->page;
		$limit = 100;
		$offset = $page * $limit;
		
		if($lang !== null){
			 $apiKey = 'AIzaSyBJHC102GtcbaMKPI-xkdOC1cbovxAYTIU';
			 $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($stext) . '&target=en';
			 $response = Http::get($url);
			 $trans = $response['data']['translations'][0]['translatedText'];	
			 $stext = $trans;
		}
		
		foreach($words as $word){
			
		//	if(strlen($word) > 2){
			
			$providerpages = ProviderPage::
	   		where('sp_status',4)
			->where('sp_title_1','LIKE','%'.$word.'%')
			->orWhere('sp_title_2','LIKE','%'.$word.'%')
			->orWhere('sp_desc','LIKE','%'.$word.'%')	
			->orderBy('sp_title_1','ASC')
			->pluck('id')	
			->toArray();
			
			if($loop == 0){
					$pages = $providerpages;
			} // Add all 1st pass
			
				else {
				
					foreach($providerpages as $pageid){
						// If page already in list
						if(in_array($pageid,$pages)){$pages2[] = $pageid;}
						}
						
					if(count($pages2) > 0 ){
							$pages = $pages2;
							$pages2 = [];
						} else $pages = [];
							
					} 
					
			//	} // end small word check
			
				$loop++;
				
		} // end word loop
		
		
		if($catid > 0){
			
		foreach($pages as $page){
			
			// Get cats for provider page
			$pagecats = SPService::where('id',$page)->get();
		
            foreach ($pagecats as $pcat){
				if($pcat['parent_cat_id'] == $catid){
                    $results[] = $page;
                    } 
                }
			}
			
		} else $results = $pages;
		
		
		$count = count($results);
		
		if($count > $limit){
			$results = array_slice($results, $offset, $limit); 
		}
		
		$results = ProviderPage::whereIn('id',$results)->get();
		
		// Filter by Distance
		
		 if($range < 100 && $range != 0){
			 
			 foreach($results as $page){
				 
				$latTo = $page['sp_gm_lat'];
				$lonTo = $page['sp_gm_long'];
				
				if($latTo == null || $latTo == 0){
					$page['sp_distance'] = 999;
					$filterpages[] = $page;
				} else {
					
				$distance = $this->calcdistance($latFrom,$lonFrom,$latTo,$lonTo);
					
				//$test[] = array($page['sp_title_1'],$distance);
					
				if($distance < $range){ 
					$page['sp_distance'] = round($distance,2);
					$filterpages[] = $page;
					$filtermappages[] = array('id'=>$page['id'],'text'=>$page['sp_title_1'],'sp_gm_lat'=>$page['sp_gm_lat'],'sp_gm_long'=>$page['sp_gm_long'],'add'=>$page['sp_add1'].' '.$page['sp_add_postcode']);
					}
				}
			}  
		 }
		
//		} else {
//			$filterpages = $results;
//			return 'test';
//			}
		
		// Order By Distance
		$distance  = array_column($filterpages, 'sp_distance');
		array_multisort($distance, SORT_ASC,$filterpages); 
		 
		// Page Results
		$totalcount = count($filterpages); 
		$filterpages = array_slice($filterpages, $offset, $limit);  
		
		return array('Count'=>$totalcount,'Coun2t'=>count($filterpages),'Results'=>$filterpages,'ProvidersMap'=>$filtermappages);
	}
	
	
	public function calcdistance($latFrom,$lonFrom,$latTo,$lonTo){
		
		  $latFrom = deg2rad($latFrom);
		  $lonFrom = deg2rad($lonFrom);
		  $latTo = deg2rad($latTo);
		  $lonTo = deg2rad($lonTo);

		  $latDelta = $latTo - $latFrom;
		  $lonDelta = $lonTo - $lonFrom;

		  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
			cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
		  $distance = $angle * 6371;		// kms
		 	
		  return $distance * 0.6214;
	}
	
	public function countcats($words,$parent) {
		
			
		$array = [];
		$loop = 0;
		// Get all providers in child cat 
		$services = SPService::
						where('parent_cat_id',$parent)
						->where('id','>',0)	
						->pluck('id')	
						->toArray();
		
		foreach($words as $word){
			
		//	if(strlen($word) > 2){
			
			$providerpages = ProviderPage::
			where('sp_title_1','LIKE','%'.$word.'%')
			->orWhere('sp_title_2','LIKE','%'.$word.'%')
			->orWhere('sp_desc','LIKE','%'.$word.'%')	
			->orWhere(DB::raw('lower(sp_desc)'), "LIKE", "%".strtolower($word)."%")
			->orderBy('sp_title_1','ASC')
			->pluck('id')	
			->toArray();
				
			if($loop == 0){
					$pages = $providerpages;
			} // Add all 1st pass
			
				else {
				
					foreach($providerpages as $pageid){
						// If page already in list
						if(in_array($pageid,$pages)){$pages2[] = $pageid;}
						}
						
					if(count($pages2) > 0 ){
							$pages = $pages2;
							$pages2 = [];
						} else $pages = [];
					
					if(count($providerpages) == 0){
						$pages = [];
					}
							
					} 
					
			//	} // end small word check
			
				$loop++;
				
		} // end word loop
		
		
		foreach($pages as $provider){
				if(in_array($provider,$services)){
					$array[] = $provider;
				}
		}
	   		
		return array(count($array),$array);

	
	}
	
    public function store(Request $request)
    {
		
        $base = $request->isMethod('put') ? ServiceCat::findorfail($request->value) : new ServiceCat;
		$base->id = $request->value;
		$base->title = $request->text;
		$base->client = $request->client;
		$base->save();
		return new ServiceCatResource($base);
	}

   
    public function show($id)
    {
        $base = ServiceCat::findorfail($id);
		return new ServiceCatResource($base);
    }


    public function destroy($id)
    {
        $base = ServiceCat::findorfail($id);
		if($base->delete()){
			return new ServiceCatResource($base);
		}
    }
	

}
