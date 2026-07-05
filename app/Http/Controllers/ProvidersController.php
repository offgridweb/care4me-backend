<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provider;
use App\ProviderPage;
use App\SPService;
use App\ServiceCat;
use App\ServiceCatText;
use App\ServiceCatKeyword;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProviderResource as ProviderResource;
use App\Http\Resources\ProviderResourceList as ProviderResourceList;
use App\Http\Resources\ProviderPageResourceMap as ProviderPageResourceMap;
use App\Http\Resources\ProviderPageResource as ProviderPageResource;
use App\Http\Resources\ProviderPageResourceList as ProviderPageResourceList;
use App\Http\Resources\ProviderPageResourceFull as ProviderPageResourceFull;
use App\Http\Resources\ServiceCatResource as ServiceCatResource;
use App\Http\Resources\SPServiceResource as SPServiceResource;
class ProvidersController extends Controller 
{
	
	
	
	public function placelookup(Request $request){
		
	$place = $request->stext;
	$places = [];	
		
//	$validpc = $this->validateUKPostcode($place);
//	
//	if($validpc){
//		return 'PC OK';
//	} else return 'no';	
		
	$data = Http::get('https://api.ideal-postcodes.co.uk/v1/places', [
		'api_key' => 'ak_lm91i6dgahwp9TXWjQjvbIlcUWMUD',
		'q' => $place,
		'country_iso' => 'GBR'
	]);
		
		
		foreach($data['result']['hits'] as $place){
			$places[] = array('value'=>$place['id'],'text'=>$place['name']);
		}
		
		return array('areas'=>$places);
	}
	
	public function validateUKPostcode($postcode) {
		
	
    // Remove spaces and convert to uppercase for consistent formatting
    $postcode = strtoupper(str_replace(' ', '', $postcode));

    // Define the regular expression pattern for UK postcodes
    $pattern = '/^([A-Z][A-HJ-Y]?\d[A-Z\d]? ?\d[A-Z]{2}|GIR ?0A{2})$/';

    // Check if the postcode matches the pattern
    return preg_match($pattern, $postcode);
	}

	
	public function postcodelookup(Request $request){
		$pc = $request->postcode;
		$data = Http::get('https://api.ideal-postcodes.co.uk/v1/postcodes/'.$pc, [
				'postcode' => $pc,
				'api_key' => 'ak_lm91i6dgahwp9TXWjQjvbIlcUWMUD',
			]);
			
			if($data['code'] == 2000){
				$lat = $data['result'][0]['latitude'];
				$long = $data['result'][0]['longitude'];
				$error = 0;	
			} else {
				$lat = null;
				$long = null;
				$error = 1;
			}
		
		return array('Position'=>array($lat,$long),'Error'=>$error);
		
	}
	
	public function rodtest(){
		
		$test = [];
		
		$pages = ProviderPage::
			where('sp_gm_lat',null)
			->where('sp_status',4)
			->where('sp_add_postcode','!=',null)
			->where('sp_add_postcode','!=','')
			//->where('sp_add_postcode','SW1P 2QU')
			->get();
		
		
		foreach($pages as $page){
			
			$pc = $page->sp_add_postcode;
			$data = Http::get('https://api.ideal-postcodes.co.uk/v1/postcodes/'.$pc, [
				'postcode' => $pc,
				'api_key' => 'ak_lm91i6dgahwp9TXWjQjvbIlcUWMUD',
			]);
			
			if($data['code'] == 2000){
			
			$lat = $data['result'][0]['latitude'];
			$long = $data['result'][0]['longitude'];
			
			$test[] = array($pc,$lat,$long);
				
			$page->sp_gm_lat = $lat;
			$page->sp_gm_long = $long;	
			$page->save();
			}
			
		}
		
		return array(count($test),$test);
	}
	
	
	
	public function getprovider(Request $request){
		$id = $request->id;
		$provider = Provider::where('id',$id)->get();
		return array('Provider'=>ProviderResource::collection($provider));
	}
	
	public function updatelisting(Request $request){
		
		$details = (object)$request->data;
		$cats = $request->data2;
	
		
		$listing = ProviderPage::where('id',$details->value)->first();
		if($listing == null){
			$listing = new ProviderPage;
		}
		
		
		$listing->sp_title_1 = $details->text;
		$listing->sp_title_2 = $details->text2;
		$listing->sp_desc = $details->page_desc;
		$listing->sp_email = $details->email;
		$listing->sp_website = $details->website;
		$listing->sp_gm_lat = $details->gm_lat;
		$listing->sp_gm_long = $details->gm_long;
		$listing->sp_add1 = $details->add1;
		$listing->sp_add2 = $details->add2;
		$listing->sp_add3 = $details->add3;
		$listing->sp_add_postcode = $details->postcode;
		$listing->sp_tel = $details->tel;
		$listing->save();
		
		// Update cats
		
		foreach($cats as $cat){
			
			$spdata = SPService::
				where('id',$details->value)
				->where('cat_id',$cat['value'])
				->first();
			
			if($spdata == null && $cat['selected'] == 1){
				$spdata = new SPService;
				$spdata->id = $details->value;
				$spdata->parent_cat_id = $cat['value'];
				$spdata->save();
				
			} else {
				if($spdata != null && $cat['selected'] == 0){
					$spdata->delete();
				} 
			}
		}
		
		return ($request);
	}
	
	public function getproviderlistings(Request $request){
		
		$id = $request->id;
		$provider = $request->provider;
		$servicesarray = [];
		$services = [];
		
		if($id != 0){
			$pages = ProviderPage::where('id',$id)->get();
			
			$cats = SPService::where('id',$id)->groupBy('parent_cat_id')->distinct()->get();
			foreach($cats as $cat){
				if(!in_array($cat->parent_cat_id,$servicesarray)){
					$servicesarray[] = array($cat->parent_cat_id);
				}
				
			$services = ServiceCatText::whereIn('id',$servicesarray)->get();	
				
			
			}
		} else $pages = ProviderPage::where('provider',$provider)->orderBy('id','desc')->get();
		
		return array('Pages'=>ProviderPageResourceFull::collection($pages),'Cats'=>$services);//);
	}
	
	public function getlatlong(Request $request){
		
		$postcode = $request->postcode;
		$response = Http::get('http://api.positionstack.com/v1/forward?access_key=10190f5413c8038e7e66d323039a592b&query='.$postcode);

				if(!isset($response['data'])){
					return array($provider,$response);
				} else {
				$lat = $response['data'][0]['latitude'];
				$long = $response['data'][0]['longitude'];
				}
		return array($lat,$long);
	}

	public function buildlatlong(Request $request){
		
		$test = [];
		$providers = Provider::
			where('provider_postcode','!=','')
			->where('latitude',null)
			->limit(500)
			->get();
		
		
		
		foreach($providers as $provider){
			$postcode = $provider->provider_postcode;
			if(strlen($postcode) > 4){
				
				$response = Http::get('http://api.positionstack.com/v1/forward?access_key=10190f5413c8038e7e66d323039a592b&query='.$postcode);

				if(!isset($response['data'])){
					return array($provider,$response);
				} else {
				$lat = $response['data'][0]['latitude'];
				$long = $response['data'][0]['longitude'];
				$test[] =  array($provider['id'],$lat,$long);

				$provider->latitude = $lat;
				$provider->longitude = $long;
				$provider->save();
				}
				
			}
			
			}
							 
		return $test;					 
	
	}	
	
	 public function index(Request $request)
    {
			 	$pages = ProviderPage::
		 		whereIn('id',$request->pages)
				//->orderBy('sp_title_1','ASC')	
				->get();	
	
	   return array('Providers'=>ProviderPageResource::collection($pages),'ProvidersMap'=>ProviderPageResourceMap::collection($pages));
    }
	
	 public function indexcat(Request $request)
    {
		$catid = $request->id;
		if($catid == 999){$catid = 0;}
		$stext = $request->stext; 
		$page = $request->page;
		$area = $request->area;
		$range = $request->range; // miles 
		$limit = $request->limit;
	  	$offset = $limit * $page;
		$servicetext = ''; 
		$count = 0;
		$totalcount = 0; 
		$pages = [];
		$filterpages = []; 
		$filtermappages = [];   
		
		if($area !== ''){
			$area = json_decode($area);
			$latFrom = $area->lat;
			$lonFrom = $area->lng;
		} else {
			$latFrom = null;
			$lonFrom = null;
		} 
		 
		
		if($catid == 0){ // Get ALL
			
			$ppages = ProviderPage::select('id','sp_status')
			->where('sp_status',4)	
	   		->orderBy('id','ASC')
			->pluck('id')	
			->toArray(); 
			
		} else { // get by Cat ID
			
			
		$service = ServiceCat::where('service_cat_id',$catid)->first();
		
			if($service->service_cat_parent == 1){
				
					$ppages = SPService::select('id','sp_page_id')
					->where('parent_cat_id',$service->service_cat_id)
					->orderBy('id','ASC')	
					->pluck('sp_page_id')	
					->toArray();
				
			} else {
				
				$ppages = SPService::select('id','sp_page_id')
					->where('cat_id',$service->service_cat_id)
					->orderBy('id','ASC')	
					->pluck('sp_page_id')	
					->toArray();
				}
		}
		 
		 if($stext == ''){
			 
				foreach($ppages as $page){
					if(!in_array($page,$pages)){
					$pages[] = $page;
					}
				}
			 
			$pages = ProviderPage::
			 	whereIn('id',$pages)
				->get()
				->toArray();	
			 
			if($catid > 0){$totalcount = count($pages);}
			 
			 
		 } else {	// filter by text search
		 
		$loop = 0;
		$pagestext = [];
		$pages2 = []; 
		$words = explode(' ',$stext);	 
		 
		foreach($words as $word){
			
			if(strlen($word) > 2){
			
			$providerpages = ProviderPage::
	   		where('sp_title_1','LIKE','%'.$word.'%')
			->orWhere('sp_title_2','LIKE','%'.$word.'%')
			->orWhere('sp_desc','LIKE','%'.$word.'%')	
			//->orderBy('sp_title_1','ASC')
			->pluck('id')	
			->toArray();
				
			if($loop == 0){
					$pagestext = $providerpages;
				
			} // Add all 1st pass
			
				else {
				
					if(count($providerpages) == 0){$pagestext = [];}
					foreach($providerpages as $pageid){
						
						if(in_array($pageid,$pagestext)){
							$pages2[] = $pageid; // Add if matched in array
						} 
					}
					
					
					if(count($pages2) > 0){
							$pagestext = $pages2;
							$pages2 = [];
							} 
				}
			
			} // igonore small words loop end
			
			$loop++;
			
		} // end word loop
			 
		 
		 if($stext !== ''){
			 	
			 	$pages = ProviderPage::
		 		whereIn('id',$ppages)
				->whereIn('id',$pagestext)
				->get()	
				->toArray();		
				
			 	$count = count($pages);
	
		 		} 
		}
		 
		
		 // Filter By Distance
		 
		 if($range < 100 && $range != 0){
			 foreach($pages as $page){
				$latTo = $page['sp_gm_lat'];
				$lonTo = $page['sp_gm_long'];
				
				if($latTo == null || $latTo == 0){
					$page['sp_distance'] = 999;
					$filterpages[] = $page;
				} else {
						$distance = $this->calcdistance($latFrom,$lonFrom,$latTo,$lonTo);
						if($distance < $range){ 
							$page['sp_distance'] = round($distance,2);
							$filterpages[] = $page;
							$filtermappages[] = array('id'=>$page['id'],'text'=>$page['sp_title_1'],'sp_gm_lat'=>$page['sp_gm_lat'],'sp_gm_long'=>$page['sp_gm_long'],'add'=>$page['sp_add1'].' '.$page['sp_add_postcode']);
							}
						}
				} // end page loop 
			 
				//$totalcount = count($filterpages);
		 }
			 
		else { // Don't filter by distance
				$filterpages = $pages;	
				foreach($pages as $page){   // change pages to ppages
					if($page['sp_gm_lat'] > 0){
						$filtermappages[] = array('id'=>$page['id'],'text'=>$page['sp_title_1'],'sp_gm_lat'=>$page['sp_gm_lat'],'sp_gm_long'=>$page['sp_gm_long'],'add'=>$page['sp_add1'].' '.$page['sp_add_postcode']);
						}
				}
			
			}
		 
		
		// Order By Distance
		$distance  = array_column($filterpages, 'sp_distance');
		array_multisort($distance, SORT_ASC,$filterpages); 
		 
		 
		// Page Results
		$totalcount = count($filterpages); 
		$filterpages = array_slice($filterpages, $offset, $limit); 
		$filtermappages = array_slice($filtermappages, $offset, $limit);  
		 
		// Get logo sizes
		$temp = [];
		 
		foreach($filterpages as $page){
			$logo = env('BASE_HOME').'/httpdocs/public/images/logos/'.$page['sp_logo'];
		
			if(File::exists($logo) && File::isFile($logo)){
				$size = getimagesize($logo);
			} else $size = array(0,0);
		
			$page['logo_size'] = array($size[0],$size[1]);
			$temp[] = $page;
			
		}
		 
		$filterpages = $temp; 
		
		 
	   	return array('text'=>'indexcat','stext'=>$servicetext,'Count'=>$totalcount,'CountMap'=>count($filtermappages), 'Results'=>$filterpages,'ProvidersMap'=>$filtermappages);
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
	
	 public function indexname(Request $request)
    {
	
	   	$providerid = $request->id;
		if($providerid == 0){return;}
		 
		$provider = Provider::where('id',$providerid)->first();
		$providers = Provider::where('provider_display_name',$provider->provider_display_name)->pluck('id');
		 
		$pages = ProviderPage::whereIn('provider',$providers)->get(); 
		
		
	   return array('Providers'=>ProviderPageResource::collection($pages),'ProvidersMap'=>ProviderPageResourceMap::collection($pages));
    }
	

   public function indexsingle(Request $request){

	  
	   $id = $request->id;
	   
	   $providerpage = ProviderPage::
	   		where('id',$id)
			->get();
	   
	   $provider = Provider::where('id',$providerpage[0]['provider'])->get();
	  
	   $pcats = SPService::where('sp_page_id',$providerpage[0]['id'])->groupBy('parent_cat_id')->get();
	   $ccats = SPService::where('sp_page_id',$providerpage[0]['id'])->groupBy('cat_id')->get();
	   
	   
	   //return SPServiceResource::collection($ccats);
	   
	   return array('Map'=>array('latitude'=>$provider[0]['latitude'],'longitude'=>$provider[0]['longitude']),'Provider'=>$provider[0]['provider_display_name'],'ProviderId'=>$provider[0]['id'],['provider_display_name'],'Providers'=>ProviderPageResourceFull::collection($providerpage),'PCats'=>SPServiceResource::collection($pcats),'CCats'=>SPServiceResource::collection($ccats));
	   
    }
	
	public function indextext(Request $request)
    {
	  	
		$lang = null;
	  	$stext = $request->stext;
		$area = $request->area;
		$range = $request->range;
		$cats = json_decode($request->cats);
		$catsel = 0;
		if($cats !== null){
			if($cats->childid != 999){$catsel = $cats->childid;} else $catsel = $cats->parentid;
		}
		
		
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
		$filterpages = [];
		$cats = [];
		$cats2 = [];
		
		// Filter by text 
		
		if($lang !== null){
		 $apiKey = 'AIzaSyBJHC102GtcbaMKPI-xkdOC1cbovxAYTIU';
    	 $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($stext) . '&target=en';
   		 $response = Http::get($url);
		 $trans = $response['data']['translations'][0]['translatedText'];	
		 $stext = $trans;
		}
		 $words = explode(' ',$stext);
		 $loop = 0;
		
		
		foreach($words as $word){
			
			if(strlen($word) > 1){
			
			$providerpages = ProviderPage::
			where('sp_publish',1)	
	   		->where('sp_title_1','LIKE','%'.$word.'%')
			->orWhere('sp_title_2','LIKE','%'.$word.'%')
			->orWhere('sp_desc','LIKE','%'.$word.'%')	
			->orderBy('sp_title_1','ASC')
			->pluck('id')	
			->toArray();
				
			if($loop == 0){
					$pages = $providerpages;
					
					foreach($providerpages as $pageid){
						// Get cats for provider page
						$pagecats = SPService::with('servicecats')->where('id',$pageid)->get();
						foreach ($pagecats as $pcat){
							if(!in_array($pcat->cat_id,$cats)){
							$cats[] = $pcat->cat_id; // Add if matched in array
							} 
						}
					}
			
			} // Add all 1st pass
			
				else {
				
					foreach($providerpages as $pageid){
						// Get cats for provider page
						$pagecats = SPService::where('id',$pageid)->get();
						if(in_array($pageid,$pages)){
							
						$pages2[] = $pageid; // Add if matched in array
							
						// Get cats for provider page
						$pagecats = SPService::with('servicecats')->where('id',$pageid)->get();
						foreach ($pagecats as $pcat){
							if(in_array($pcat->cat_id,$cats)){
							$cats2[] = $pcat->cat_id; // Add if matched in array
							} 
						}
						} 
					}
					
					if(count($cats2) > 0){
							$cats = $cats2;
							$cats2 = [];
							}
					
					if(count($pages2) > 0){
							$pages = $pages2;
							$pages2 = [];
							} else $pages = [];
				}
			
				$loop++;
				
				
			} // igonore small words loop end
			
		} // end word loop
		
		$providerpages = ProviderPage::
				whereIn('id',$pages)
//				->orderBy('text','asc')	
				->get();
		
		
		// Filter by Cat
		
		if($catsel != 999 ){
			
		$found = [];	
			
		$service = ServiceCat::where('service_cat_id',$catsel)->first();
		
			if($service->service_cat_parent == 1){ // Get all pages for selected parent cat
					$ppages = SPService::select('id','sp_page_id')
					->where('parent_cat_id',$service->service_cat_id)
					->orderBy('id','ASC')	
					->pluck('sp_page_id')	
					->toArray();
			} else {								// Get all pages for selected child cat
				$ppages = SPService::select('id','sp_page_id')
					->where('cat_id',$service->service_cat_id)
					->orderBy('id','ASC')	
					->pluck('sp_page_id')	
					->toArray();
				}
			
			foreach($providerpages as $page){
				if(in_array($page->id,$ppages)){$found[] = $page;}
			}
			
			$providerpages = $found;	
		}
		
		
		// Filter By Distance
		 
		 if($range < 100 && $range != 0 && $latFrom !== null){
			 
			 foreach($providerpages as $page){
				 
				$latTo = $page['sp_gm_lat'];
				$lonTo = $page['sp_gm_long'];
				
				if($latTo == null || $latTo == 0){
					$page['sp_distance'] = 999;
					$filterpages[] = $page;
				} else {
					
				
				$distance = $this->calcdistance($latFrom,$lonFrom,$latTo,$lonTo);
				if($distance < $range){ 
					$page['sp_distance'] = round($distance,2);
					$filterpages[] = $page;
					$filtermappages[] = array('id'=>$page['id'],'text'=>$page['sp_title_1'],'sp_gm_lat'=>$page['sp_gm_lat'],'sp_gm_long'=>$page['sp_gm_long'],'add'=>$page['sp_add1'].' '.$page['sp_add_postcode'],'distance'=>$distance);
					}
				}
				 
				
			}
			 
			 $providerpages = $filterpages;
			 $title  = array_column($providerpages, 'sp_title_1');
			 array_multisort($title, SORT_ASC,$providerpages); 
			 
		 }
		
	   if($request->list){
		   return array('Total'=>count($providerpages),'Providers'=>ProviderPageResourceList::collection($providerpages));
	   }	
		
	   return array('Total'=>count($providerpages),'Providers'=>ProviderPageResource::collection($providerpages),'ProvidersMap'=>ProviderPageResourceMap::collection($providerpages));//
    }
	
	public function indexlist(Request $request){
		
		$pages = $request->list;
		$area = $request->area;
		$range = $request->range;
	
		if($area !== ''){
			$area = json_decode($area);
			$latFrom = $area->lat;
			$lonFrom = $area->lng;
		} else {
			$latFrom = null;
			$lonFrom = null;
		}
		
		$providerpages = ProviderPage::
				whereIn('id',$pages)
//				->orderBy('text','asc')	
				->get();
		
		// Filter By Distance
		 
		 if($range < 100 && $range != 0 && $latFrom !== null){
			 
			 foreach($providerpages as $page){
				 
				$latTo = $page['sp_gm_lat'];
				$lonTo = $page['sp_gm_long'];
				
				if($latTo == null || $latTo == 0){
					$page['sp_distance'] = 999;
					$filterpages[] = $page;
				} else {
					
				
				$distance = $this->calcdistance($latFrom,$lonFrom,$latTo,$lonTo);
				if($distance < $range){ 
					$page['sp_distance'] = round($distance,2);
					$filterpages[] = $page;
					$filtermappages[] = array('id'=>$page['id'],'text'=>$page['sp_title_1'],'sp_gm_lat'=>$page['sp_gm_lat'],'sp_gm_long'=>$page['sp_gm_long'],'add'=>$page['sp_add1'].' '.$page['sp_add_postcode'],'distance'=>$distance);
					}
				}
				 
				
			} 
			 
			 $providerpages = $filterpages;
			 $title  = array_column($providerpages, 'sp_title_1');
			 array_multisort($title, SORT_ASC,$providerpages); 

		 } else {
			 foreach($providerpages as $page){
					$filtermappages[] = array('id'=>$page['id'],'text'=>$page['sp_title_1'],'sp_gm_lat'=>$page['sp_gm_lat'],'sp_gm_long'=>$page['sp_gm_long'],'add'=>$page['sp_add1'].' '.$page['sp_add_postcode'],'distance'=>0);
					} 
		 }
		
		
		// Get logo sizes
		$temp = [];
		 
		foreach($providerpages as $page){
			$logo = env('BASE_HOME').'/httpdocs/public/images/logos/'.$page['sp_logo'];
		
			if(File::exists($logo) && File::isFile($logo)){
				$size = getimagesize($logo);
			} else $size = array(0,0);
		
			$page['logo_size'] = array($size[0],$size[1]);
			$temp[] = $page;
			
		}
		 
		$providerpages = $temp; 
		
		return array('Count'=>count($providerpages),'Results'=>$providerpages,'ProvidersMap'=>$filtermappages);
			//array('Total'=>count($providerpages),'Providers'=>ProviderPageResourceFull::collection($providerpages),'ProvidersMap'=>ProviderPageResourceMap::collection($providerpages));//
	}
	
	

	
    public function store(Request $request)
    {
		
        $base = $request->isMethod('put') ? Provider::findorfail($request->value) : new Provider;
		$base->id = $request->value;
		$base->title = $request->text;
		$base->client = $request->client;
		$base->save();
		return new ProviderResource($base);
	}

   
    public function show($id)
    {
        $base = Provider::findorfail($id);
		return new ProviderResource($base);
    }


    public function destroy($id)
    {
        $base = Provider::findorfail($id);
		if($base->delete()){
			return new ProviderResource($base);
		}
    }
	
	
}
