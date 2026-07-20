<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provider;
use App\ProviderPage;
use App\SPService;
use App\ServiceCat;
use App\Borough;
use App\SystemEvent;
use App\SystemSettings;
use App\Tracking;
use App\EmailTemplate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProviderAdminResource as ProviderAdminResource;
use App\Http\Resources\ProviderPageResource as ProviderPageResource;
use App\Http\Resources\ProviderPageResourceFull as ProviderPageResourceFull;
use App\Http\Resources\SPServiceResource as SPServiceResource;
use App\Http\Resources\BoroughResource as BoroughResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TemplateEmail;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Facades\Crypt;

class MainController extends Controller 
{
	
	public function parentservicecats(){
		$cats = ServiceCat::
			select('service_cat_id AS id','service_cat_name AS text','service_cat_icon AS icon')
			->where('service_cat_icon','!=',null)
			->get();
		return array('cats'=>$cats);	
	}
	
	public function servicecatsall()
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
		   
    }

    public function setTracking($search, $request){
        // search parentid, childid, area
        $track = new Tracking;
        $track->track_ip = $request->ip();
        $track->track_page = $request->page ?? 1;
        $track->track_provider_id = $request->id ?? null;
        $track->track_cat = $search['childid'] ?? null;
        $track->track_area = $search['area'] ?? null;
        $track->track_parent = $search['parentid'] ?? null;
        $track->track_stext = $search['stext'] ?? null;
        $track->save();
//        print_r($search);
//        dd();
    }
	
	public function indextext(Request $request)
    {

		$validated = $request->validate([
			'search.stext'	  		=> 'nullable|string|max:500',
			'search.parentid'	   	=> 'nullable|integer|min:0|max:9999',
			'search.childid'	   	=> 'nullable|integer|min:0|max:9999',
			'search.area'	        => 'nullable|integer|min:0|max:999',
			'page'	   	 			=> 'nullable|integer|min:0|max:500',
			'limit'	   	 			=> 'nullable|integer|min:0|max:500'
		]);
		
	   $this->setTracking($validated['search'], $request);

		$lang = 'fr';
		$range = 2;
		$page = $validated['page'] ?? 1;
		$limit = $validated['limit'] ?? 10;
		
	  	$stext = $validated['search']['stext'] ?? '';
		$area = $validated['search']['area'] ?? 0;
		
		$catsel = 999;
			if($validated['search']['childid'] != 999){
				$catsel = $validated['search']['childid'];
			} else $catsel = $validated['search']['parentid'];
		
		if($area > 0 && $area < 99){
			$borough = Borough::where('id',$area)->first();
			$latFrom = $borough->latitude;
			$lonFrom = $borough->longitude;
		} else {
			$latFrom = null;
			$lonFrom = null;
		}
		
		$pages = [];
		$pages2 = [];
		$filterpages = [];
		$cats = [];
		$cats2 = [];
		
		
	if($stext != ''){	
		
		// Filter by text 
		$stext = trim($stext);

		if ($lang !== null) {

            try {
                $response = Http::get(
                    'https://www.googleapis.com/language/translate/v2',
                    [
                        'key' => config('services.google.translate_key'),
                        'q' => $stext,
                        'target' => 'en',
                    ]
                )->throw();

                $stext = data_get($response->json(), 'data.translations.0.translatedText', $stext);

            } catch (\Throwable $e) {
                // Translation failed (403, timeout, etc.)
                // Keep the original $stext
            }
		}
		
		$words = collect(preg_split('/\s+/', $stext))
			->filter(fn ($w) => mb_strlen($w) >= 4)
			->values();
		
		
		$query = ProviderPage::query()
    		->where('sp_publish', 4)
			->where('archive',1);
		
		$scoreSql = [];
		$bindings = [];

		foreach ($words as $word) {
			//$regex = '[[:<:]]' . preg_quote($word, '/') . '[[:>:]]';
            $regex = '\\b' . preg_quote($word, '/') . '\\b';
			
			$scoreSql[] = "
    		(CASE WHEN sp_title_1 REGEXP ? THEN 5 ELSE 0 END) +
    		(CASE WHEN sp_title_2 REGEXP ? THEN 3 ELSE 0 END) +
    		(CASE WHEN sp_desc REGEXP ? THEN 1 ELSE 0 END)
			";

			$bindings[] = $regex;
			$bindings[] = $regex;
			$bindings[] = $regex;
			
			$query->orWhere('sp_title_1', 'REGEXP', $regex)
					->orWhere('sp_title_2', 'REGEXP', $regex)
				  ->orWhere('sp_desc', 'REGEXP', $regex);

		}	
		
		$providerpagelist = $query
							->select('id')
							->selectRaw(implode(' + ', $scoreSql) . ' AS relevance', $bindings)
							->orderByDesc('relevance')
							->orderBy('sp_title_1')
							->get()
							->pluck('id')
							->toArray();
		
	} else {
		// no text search just get all pages 
			$providerpagelist = ProviderPage::
							select('id')
							->where('archive',0)
							->where('sp_status',4)
							->orderBy('sp_title_1')
							->get()
							->pluck('id')
							->toArray();
		}
		
		
		// filter by category
		
		if($catsel != 999 ){
			
			$service = ServiceCat::where('service_cat_id', $catsel)->firstOrFail();

			$catPageIds = SPService::query()
				->when(
					$service->service_cat_parent == 1,
					fn ($q) => $q->where('parent_cat_id', $service->service_cat_id),
					fn ($q) => $q->where('cat_id', $service->service_cat_id)
				)
				->pluck('sp_page_id')
				->unique()
				->toArray();
			
			
			$providerpagelist = array_values(array_intersect($providerpagelist, $catPageIds));
		
		}
		//
			
		
		
		// Filter By Distance
		 
		 if($range < 100 && $range != 0 && $latFrom !== null){
			 
		
			$providerpagelist2 = ProviderPage::selectRaw("
					*,
					(
					  6371 * acos(
						cos(radians(?)) *
						cos(radians(sp_gm_lat)) *
						cos(radians(sp_gm_long) - radians(?)) +
						sin(radians(?)) *
						sin(radians(sp_gm_lat))
					  )
					) AS sp_distance
				", [$latFrom, $lonFrom, $latFrom])
				->whereNotNull('sp_gm_lat')
				->where('sp_gm_lat', '!=', 0)
				->having('sp_distance', '<', $range)
				->orderBy('sp_distance')
				->pluck('id')
				->toArray();
			 
			 	$providerpagelist = array_values(array_intersect($providerpagelist, $providerpagelist2));
		 }
		
		
		
		$total = count($providerpagelist);
		$ids = implode(',', $providerpagelist);

		if($total > 0){
		$providerpagesmap = ProviderPage::
							select('id','sp_title_1','sp_gm_lat','sp_gm_long')	
							->whereIn('id', $providerpagelist)
							->get();
			
		$providerpages = ProviderPage::whereIn('id', $providerpagelist)
			->orderByRaw("FIELD(id, $ids)")
			->skip(($page - 1) * $limit)
			->take($limit)
			->get();
		} else {
			$providerpagesmap = [];
			$providerpages = [];
		}
		
		
	   return array('Total'=>$total,'MapTotal'=>count($providerpagesmap),'Providers'=>$providerpages,'ProvidersMap'=>$providerpagesmap);//
    }
	

	 public function checkuserexists(Request $request)
    {
		$email = $request->email;
		$exists = User::where('email', $email)->where('provider', '!=', null)->exists();

		return response()->json([
			'exists' => $exists
		]);
	}
	
	
	
	
	
	public function register(Request $request){
		
		
		$validated = $request->validate([
			'register.company' 				=> 'required|string|max:100',
			'register.building'				=> 'nullable|string|max:100',
			'register.address1'				=> 'nullable|string|max:100',
			'register.address2'				=> 'nullable|string|max:100',
			'register.postcode'				=> 'required|string|max:50',
			'register.contactPhone'			=> 'nullable|string|max:100',
			'register.latitude'				=> 'nullable|numeric|between:-90,90',
			'register.longitude'			=> 'nullable|numeric|between:-90,90',
			'register.contactName'			=> 'required|string|max:50',
			'register.contactEmail'			=> 'required|string|max:100',
			'register.website'				=> 'nullable|string|max:100',
			]);
			
		
		$providerdata = [
			'provider_display_name'	=> $validated['register']['company'],
			'provider_contact'		=> $validated['register']['contactName'],
			'provider_email'		=> $validated['register']['contactEmail'],
			'provider_website'		=> $validated['register']['website'] ?? null,
			'provider_add1'			=> $validated['register']['building'],
			'provider_add2'			=> $validated['register']['address1'] ?? null,
			'provider_add3'			=> $validated['register']['address2'] ?? null,
			'provider_postcode'		=> $validated['register']['postcode'],
			'provider_phone'		=> $validated['register']['contactPhone'] ?? null,
			'latitude'				=> $validated['register']['latitude'] ?? null,
			'longitude'				=> $validated['register']['longitude'] ?? null,
			'user'					=> 0,
			'provider_status'		=> 0
		];
		
		
		$provider = new Provider;
		$provider->fill($providerdata); 
		$provider->save();
		
		if($provider != null){
			$send = $this->sendemailtemplate($provider->provider_email,17); // send reg acknowledge
			
			$to = $this->getadminemail();
			$subject = 'Care4me New Registration';
			$message = '<p>'.$providerdata['provider_display_name'].' has registered on the site'.'</p>';
			$email = $this->sendemailadmin($subject,$message,$to);
		}
		
		$event = $this->createevent(1,$provider->id,0,0,0); 
       
		return; //array('error'=>$send);
			
	}
	
	
	
	public function checkverify(Request $request){
		
		$validated = $request->validate([
			'link' 		=> 'required|string|max:1000',
			'adduser' 	=> 'required|boolean',
			'password' 	=> 'required_if:adduser,true|nullable|string|min:8',
			]);
		
		$message = null;
		$raw = $validated['link'];
		$token = urldecode($raw);
		$data = json_decode(Crypt::decryptString($token), true);
		$error = false;
		$message = 'ok';
		
		$email  = substr($data, 0, -4);
		$provider = substr($data, -4);
		
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = true;
			$message = 'Invalid Email';
		}
		
		
		if(!$error){
			$user = User::
				where('email',$email)
				->where('provider',$provider)
				->where('status',3)
				->first();
			
			if($user == null){
				$error = true;
				$message = 'Invalid User';
			}
		}
		
		if($validated['adduser'] && !$error){
			$provider = Provider::where('id',$user->provider)->first();
				if($provider == null){
					$error = true;
					$message = 'Provider not found';
				} else {
					$error = false;
					$provider->provider_status = 1;
					$provider->save();
				}
			
				if(!$error){
					$user->status = 1;
					$user->password = Hash::make($request->password);
					$user->save();
					$error = false;
					$message = 'user created';
					
					$type = 2;
					$event = $this->createevent($type,$provider->id,0,$user->provider,0); // createevent($type,$provider,$listing,$user,$status)
				}
		}
		
		return array('email'=>$email,'error'=>$error,'message'=>$message);
	}
	
	public function resetpasswordverify(Request $request){
		
		$validated = $request->validate([
			'link' 		=> 'required|string|max:1000',
			'adduser' 	=> 'required|boolean',
			'password' 	=> 'required_if:adduser,true|nullable|string|min:8',
			]);
		
		$message = null;
		$raw = $validated['link'];
		$token = urldecode($raw);
		$data = json_decode(Crypt::decryptString($token), true);
		$error = false;
		$message = 'ok';
		
		$email  = substr($data, 0, -4);
		$provider = substr($data, -4);
		
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = true;
			$message = 'Invalid Email';
		}
		
		
		if(!$error){
			$user = User::
				where('email',$email)
				->where('password_reset',1)
				->first();
			
			if($user == null){
				$error = true;
				$message = 'Invalid User';
			}
		}
		
		if($validated['adduser'] && !$error){
			
					$user->status = 1;
					$user->password = Hash::make($request->password);
					$user->password_reset = 0;
					$user->save();
					$error = false;
					$message = 'password changed';
					
					//$type = 2;
					//$event = $this->createevent($type,$provider->id,0,$user->provider,0); // createevent($type,$provider,$listing,$user,$status)
		}
		
		return array('email'=>$email,'error'=>$error,'message'=>$message);
	}
	

	public function getprovider(Request $request){

	   $id = $request->id;
	   $provider = Provider::findOrFail($id);
	   $providerpages = ProviderPage::where('provider', $provider->id)->orderBy('created_at','desc')->get();
	 
	   return array(
	   	'Provider'=> new ProviderAdminResource($provider),
		'Listings'=>ProviderPageResourceFull::collection($providerpages),
		);
	   
    }
	
	
	public function updatelisting(Request $request){
	
		$cats = $request->cats;
		$providerid = $request->provider;
		
		$validated = $request->validate([
			'listing.value' 		=> 'nullable|integer',
			'listing.page_desc'		=> 'required|string',
			'listing.text'			=> 'required|string|max:500',
			'listing.text2'			=> 'required|string|max:500',
			'listing.page_logo' 	=> 'nullable|string|max:300',
			'listing.tel'			=> 'nullable|string|max:30',
			'listing.email'    		=> 'nullable|email|max:100',
            'listing.website'		=> 'nullable|string|max:100',
			'listing.add1'			=> 'nullable|string|max:100',
			'listing.add2'			=> 'nullable|string|max:100',
			'listing.add3'			=> 'nullable|string|max:100',
			'listing.postcode'		=> 'nullable|string|max:30',
			'listing.gm_lat'  		=> 'nullable|numeric|between:-90,90',
    		'listing.gm_long' 		=> 'nullable|numeric|between:-180,180',
			'listing.publish'		=> 'required|integer',
			'provider.value'		=> 'required|integer',
			'user'					=> 'required|integer'
			]);
			
			$pageid = $validated['listing']['value'] ?? null;
			
		
			
		if(count($cats) > 0 && $pageid != null){
			// remove current cats
			$listingcats = SPService::where('sp_page_id',$pageid)->delete();
		}
		
		foreach($cats as $cat){
			$parent = ServiceCat::where('service_cat_id',$cat)->first();
			if($parent != null){
				$service = [
					'sp_page_id' => $pageid,
					'cat_id' => $cat,
					'parent_cat_id' => $parent->service_cat_parent
				];
				
				SPService::insert($service);
			}
		}
		
	
		$data = [
			'user_id'		=> $validated['user'],
			'provider'		=> $validated['provider']['value'],
			'sp_status'		=> $validated['listing']['publish'],
			'sp_desc'		=> $validated['listing']['page_desc'],		
			'sp_title_1'	=> $validated['listing']['text'],
			'sp_title_2'	=> $validated['listing']['text2'],
			'sp_logo'		=> $validated['listing']['page_logo'] ?? null,
			'sp_tel'		=> $validated['listing']['tel'] ?? null,
			'sp_email'		=> $validated['listing']['email'] ?? null,
            'sp_website'	=> $validated['listing']['website'] ?? null,
			'sp_add1'		=> $validated['listing']['add1'] ?? null,
			'sp_add2'		=> $validated['listing']['add2'] ?? null,
			'sp_add3'		=> $validated['listing']['add3'] ?? null,
			'sp_add_postcode'	=> $validated['listing']['postcode'] ?? null,
			'sp_gm_lat'		=> $validated['listing']['gm_lat'] ?? null,
    		'sp_gm_long'	=> $validated['listing']['gm_long'] ?? null
		];
		
		
		if ($pageid > 0) {
        //  UPDATE
        $page = ProviderPage::findOrFail($pageid);
        $page->update($data);
        $created = false;
		} else {
			// CREATE
			$page = ProviderPage::create($data);
			$created = true;
		}

		return response()->json([
			'message'  => $created ? 'created' : 'updated',
			'page' => $page,
		], 201);

	}
	
	
	public function getlisting(Request $request){
	
		$page = ProviderPage::findOrFail($request->id);
    	$provider = Provider::findOrFail($page->provider);
    	$pcats = SPService::where('sp_page_id', $page->id)
        ->groupBy('parent_cat_id')
        ->get();

    	$ccats = SPService::where('sp_page_id', $page->id)
        ->groupBy('cat_id')
        ->get();

        $search['parentid'] = $request->parentid ?? null;
        $search['childid'] = $request->childid ?? null;
        $search['area'] = $request->area ?? null;
        $this->setTracking($search, $request);

		return [
			'Pages'    => new ProviderPageResourceFull($page),
			'PCats'    => SPServiceResource::collection($pcats),
			'CCats'    => SPServiceResource::collection($ccats),
			];
	}
	
	public function getproviderlistings(Request $request){
		$pages = [];
		
		$validated = $request->validate([
			'user' 			=> 'required|integer|max:9999',
			'provider' 		=> 'required|integer|max:9999'
		]);
		
		$checkUser = User::where('id',$validated['user'])->where('provider',$validated['provider'])->first();
		if($checkUser != null){
		$pages = ProviderPage::where('provider',$validated['provider'])->where('archive',0)->orderBy('id','desc')->get();
		}
		return array('Pages'=>ProviderPageResourceFull::collection($pages)); //,'Cats'=>$services);//);
	}
	
	public function getproviderdetails(Request $request){

	   $id = $request->provider;
	   $provider = Provider::findOrFail($id);
	   return array(
	   	'Provider'=> new ProviderAdminResource($provider),
		);
	   
    }


	
	function processcontactform(Request $request){
		$validated = $request->validate([
			'form.name' 		=> 'required|string|max:100',
			'form.email'		=> 'required|string|max:100',
			'form.company'		=> 'nullable|string|max:100',
			'form.text'		=> 'required|string|max:3000'
		]);
		
		$clean = [
			'name'    => Purifier::clean($validated['form']['name'], ['HTML.Allowed' => '']),
			'email'   => Purifier::clean($validated['form']['email'], ['HTML.Allowed' => '']),
			'company' => Purifier::clean($validated['form']['company'] ?? '', ['HTML.Allowed' => '']),
			'message' => Purifier::clean($validated['form']['text'], ['HTML.Allowed' => '']),
		];
		
		//$clean['email'] = filter_var($clean['email'], FILTER_SANITIZE_EMAIL);
		
		$message = '<p>'.$clean['name'].'</p>';
		if($clean['company'] !== ''){$message = $message.'<p>'.$clean['company'].'</p>';}
		$message = $message.'<p>'.$clean['email'].'</p>';
		$message = $message.'<p>'.$clean['message'].'</p>';
		
		$to = $this->getadminemail();
		$subject = 'Care4me Contact Form';
		$email = $this->sendemailadmin($subject,$message,$to);
			
		$type = 10; //contact form recvd
		$user = $clean['email'];
		$event = $this->createevent($type,0,0,$user,0); // $type,$provider,$listing,$user,$status
		return;
	}
	
	function sendemailadmin($subject,$mailmessage,$mailto){
		
		$mailsubject = [
			'subject' => $subject,
		];
	
		$test = Mail::to($mailto)->send(
			new TemplateEmail($mailmessage, $mailsubject)
		);
		return $test;
	}
	
	function getadminemail(){
		$settings = SystemSettings::where('id',1)->first();
		$email = $settings->admin_email;
		return $email;
	}
	
	function createevent($type,$provider,$listing,$user,$status){
		
		$eventdata = [
			'provider_id' 	=> $provider ?? null,
			'listing_id'  	=> $listing ?? null,
			'type'		=> $type,
			'user'		=> $user ?? null,
			'status'	=> $status ?? null
		];
		
		$event = new SystemEvent;
		$event->fill($eventdata); 
		$event->save();
	}
	

	function sendemailtemplate($emailto,$id){
		
		$template = EmailTemplate::where('id',$id)->first();
		if($template == null){
			return array('error'=>'template not found');
		}
		
		$message = $template->email_body;
	
		$data = [
			'subject' => $template->email_subject,
		];

		Mail::to($emailto)->send(
			new TemplateEmail($message, $data)
		);
		return array('error'=>false);
	}
	
	
}