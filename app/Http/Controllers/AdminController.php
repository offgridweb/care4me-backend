<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Provider;
use App\ProviderState;
use App\ProviderPage;
use App\PublishState;
use App\SPService;
use App\ServiceCat;
use App\Tracking;
use App\SystemEvent;
use App\EmailTemplate;
use App\SystemSettings;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProviderAdminResource as ProviderAdminResource;
use App\Http\Resources\ProviderAdminResourceList as ProviderAdminResourceList;
use App\Http\Resources\ProviderResourceList as ProviderResourceList;
use App\Http\Resources\ProviderPageResourceMap as ProviderPageResourceMap;
use App\Http\Resources\ProviderPageResource as ProviderPageResource;
use App\Http\Resources\ProviderPageResourceList as ProviderPageResourceList;
use App\Http\Resources\ProviderPageResourceFull as ProviderPageResourceFull;
use App\Http\Resources\ProviderPageResourceAdmin as ProviderPageResourceAdmin;
use App\Http\Resources\ServiceCatResource as ServiceCatResource;
use App\Http\Resources\SPServiceResource as SPServiceResource;
use App\Http\Resources\UserResource as UserResource;
use App\Http\Resources\SystemEventResource as SystemEventResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TemplateEmail;
use DB;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class AdminController extends Controller 
{
	
	public function rodtesting(){
		return 'helloxx'; 
		$test = DB::table('provider_pages_new')->select('sp_logo')->get();
//		$pages = ProviderPage::
//			where('created_at','0000-00-00 00:00:00')
//			->where('updated_at','0000-00-00 00:00:00')
//			->get();
//		
//		foreach($pages as $page){
//			$created = $page->sp_created;
//			$updated = $page->sp_publish_date;
//			$page->created_at = $created;
//			$page->updated_at = $updated;
//			$page->save();
//			$test[] = $page;
//		}
		return array(count($test),$test);
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
	
	public function rodtest(){
		$test = $this->createevent(1,2,3,4,5);
		return $test;
		
		$test = [];
		$providers = Provider::where('provider_status',0)->where('provider_archive',0)->get();
		
		foreach($providers as $provider){
			$user = User::where('id',$provider->user)->where('status',1)->where('archive',0)->orderBy('id','desc')->first();
			if($user !== null){
				$test[] = array($provider->provider_display_name,$user->email);
				$provider->provider_status = 1;
				$provider->save();
			}
			
		}
		return count($test);
		
//		$users = User::where('provider',null)->get();
//		
//		foreach($users as $user){
//			$user->provider = $user->user_provider_id;
//			$user->save();
//		}
//		return $users;
		
//		$pages = ProviderPage::where('sp_logo','!=',null)->get();
		$test = [];
//		foreach($pages as $page){
//			$logo = $page->sp_logo;
//			$provider = Provider::where('provider_logo',null)->where('id',$page->sp_provider_id)->first();
//			if($provider !== null){
//				$provider->provider_logo = $logo;
//				$provider->save();
//				$test[] = $provider;
//				
//			}
//		}
//		return $test;
		
//		$pages = ProviderPage::where('sp_logo', 'LIKE', '%.jpg')->get();
//		foreach($pages as $page){
//			$page->sp_logo = str_replace('.jpg', '.jpeg', $page->sp_logo);
//			$page->save();
//			$test[] = $page;
//		}
//		
//		return $test;
	
	}
	
	public function systemsettings(){
		$settings = SystemSettings::first();
		return array('Settings'=>$settings);
	}
	
	public function updatesystemsettings(Request $request){
		$validated = $request->validate([
			'admin_email' 	 => 'required|string|max:100',
			'admin_email2' 	 => 'nullable|string|max:100',
			'admin_email3' 	 => 'nullable|string|max:100',
			'mail_from_name' => 'required|string|max:100',
			]);
		
		$settings = SystemSettings::where('id',1)->first();
		$settings->admin_email = $validated['admin_email'];
		$settings->admin_email2 = $validated['admin_email2'] ?? null;
		$settings->admin_email3 = $validated['admin_email3'] ?? null;
		$settings->mail_from_name = $validated['mail_from_name'];
		$settings->save();
		
		return $settings;
	}
	
	public function adminresults(Request $request){
	$results = [];
		
		
	$counts = Provider::selectRaw('provider_status, COUNT(*) as total')
    ->where('provider_archive', 0)
    ->whereIn('provider_status', [0,1,4])
    ->groupBy('provider_status')
    ->pluck('total','provider_status');

	$providers_waiting  = $counts[0] ?? 0;
	$providers_approved = $counts[1] ?? 0;
	$provider_verify = $counts[4] ?? 0;
	
	$counts = ProviderPage::selectRaw('sp_status, COUNT(*) as total')
    ->where('archive', 0)
    ->whereIn('sp_status', [2,4])
    ->groupBy('sp_status')
    ->pluck('total','sp_status');

	$listings_waiting  = $counts[2] ?? 0;
	$listings_approved = $counts[4] ?? 0;
		
	$date = Carbon::now()->subMonth();	
		

	$events = SystemEvent::orderBy('created_at','desc')->get();
		
	
			
		
	return array(
		'events' => SystemEventResource::collection($events),
		'providers_waiting'=>$providers_waiting,
		'providers_approved'=>$providers_approved,
		'providers_verify'=>$provider_verify,
		'listings_waiting'=>$listings_waiting,
		'listings_approved'=>$listings_approved
	);
		
	}
	
	
	 public function checkuserexists(Request $request)
    {
		$email = $request->email;
		$exists = User::where('email', $email)->where('archive', 0)->exists();

		return response()->json([
			'exists' => $exists
		]);
	}
	
	
	public function getproviderusers(Request $request){
		$validated = $request->validate([
			'provider' => 'required|integer'
			]);
			
		$users = User::where('provider',$validated['provider'])->where('archive',0)->get();
		return response()->json([
			'users' => UserResource::collection($users),
			$validated['provider']
		]);
		
	}
	
	public function deleteuser(Request $request){
		$validated = $request->validate([
			'id' => 'required|integer'
		]);
		
		$user = User::where('id',$validated['id'])->first();
		$user->archive = 1;
		$user->save();
		return $user;
	}
	
	public function updateuser(Request $request){
	
		$validated = $request->validate([
			'id'	   => 'nullable|integer',
			'email'    => 'required|string|max:100',
      		'password' => 'nullable|min:8|string|max:50',
			'provider' => 'nullable|integer'
        ]);
		
		$id = $validated['id'] ?? null;
		
		// set role
		if($id){
			$user = User::where('id',$id)->first();
			$role = $user->role;
		} else $role = 1;
		
	
		$data = [
			
			'email' => $validated['email'],
			'provider' => $validated['provider'] ?? null,
			'role' => $role,
		];
		
		// ✅ only update password if supplied
		if (!empty($validated['password'])) {
				$data['password'] = Hash::make($validated['password']);
		}
		
		
		if($id){ // update
			$user->update($data);
		} else $user = User::create($data);
			
		
	    return response()->json([
            'message'  => $user->wasRecentlyCreated ? 'created': 'updated',
            'user' => $user,
        ], 201);
	}
	
	public function updatelistingstatus(Request $request){
		$validated = $request->validate([
			'id'		=> 'required|integer',
			'status'	=> 'required|integer'
		]);
		
		$status = $validated['status'];
		$sendemail = $request->sendemail ?? true;
		
		if($status == 9){
			$archive = 1;
		} else $archive = 0;
		$data = [
			'sp_status' => $status,
			'archive' => $archive
		];
		
		$page = ProviderPage::findOrFail($validated['id']);
        $page->update($data);
		
		// send email
		switch($status){
			case 2: // unlisted
			$id = 24;
			break;
			case 3: // declined
			$id = 23;
			break;
			case 4: // approved	
			$id = 22;
			break;
		}
		
		if($status == 2 || $status == 3 || $status == 4){
			$provider = Provider::where('id',$page->provider)->first();
			$user = User::where('id',$page->user_id)->first(); // send to user that last updated page
			$data = 'Provider: '.$provider->provider_display_name.'<br/>'.'Listing: '.$page->sp_title_1.' , '.$page->sp_title_2;
			
			if ($sendemail === true) {
				$mail = $this->sendemailtemplate($id,$data,$user->email);
			}
		}
		
		return;
	}
	
	public function updateproviderstatus(Request $request){
		$validated = $request->validate([
			'id'		=> 'required|integer',
			'status'	=> 'required|integer'
		]);
		
		$status = $validated['status'];
		
		if($status == 9){
			$archive = 1;
		} else $archive = 0;
		$data = [
			'provider_status' => $status,
			'provider_archive' => $archive
		];
		
		// update provider
		$provider = Provider::findOrFail($validated['id']);
		$oldstatus = $provider->provider_status;
        $provider->update($data);
		
		if($oldstatus == 0 && $status == 1){ // approving new provider
			// create user just with code 
			$user = new User;
			$user->provider = $provider->id;
			$user->email = $provider->provider_email;
			
			// send email with code
			$emailto = $user->email;
			$prov = $user->provider;
			
			$raw = Crypt::encryptString(json_encode($emailto.$prov));
			$token = urlencode(Crypt::encryptString(json_encode($emailto.$prov)));

			$link = "https://care4me.org.uk/verify?token={$token}";
			$user->status = 3;
			
			$provider->provider_status = 4; // waiting for verification
			$provider->save();
			
			$send = $this->sendverifyemail($emailto,$link);
				
			} else {
		// update user
		
		$user = User::where('provider',$provider->id)->first();
		$user->archive = $archive;
		}
		
		$user->save();

		// Provider declined
		if($status == 2){
			$provider->provider_status = 2;
			$provider->save();
			$id = 4; // Provider Registration - Declined - User Notify
			$data = 'Provider: '.$provider->provider_display_name;
			$mail = $this->sendemailtemplate($id,$data,$user->email);
			
			// mark all listings as declined
			$unlistpages = ProviderPage::where('provider', $provider->id)->update(['sp_status' => 3]);
		}
		
		return $provider;
	}
	
	public function resetpassword(Request $request){
		$error = false;
		$message ='ok';
		
		if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
			$error = true;
			$message = 'Invalid Email';
		}
		
		if(!$error){
		$user = User::where('email',$request->email)->first();
		if($user == null){
			$error = true;
			$message = 'Account not found';
			}
			
		}
		
		if(!$error){
			$emailto = $user->email;
            $tenplateid = 6;
			$rand = random_int(1000, 9999);	
			$token = urlencode(Crypt::encryptString(json_encode($emailto.$rand)));

			$link = env('BASE_URL')."/resetpw?token={$token}";
			//$link = "http://localhost:5173/resetpw?token={$token}";
			$send = $this->sendResetPasswordemail($emailto, $link, $tenplateid);
			$user->password_reset = 1;
			$user->save();
		}
		
		return array('error'=>$error,'message'=>$message);
	}

    public function adminsendpasswordlink($emailto){
        $templateid = 31;// CHANGE
        $rand = random_int(1000, 9999);
        $token = urlencode(Crypt::encryptString(json_encode($emailto.$rand)));
        $link = env('BASE_URL')."/resetpw?token={$token}";
        $send = $this->sendResetPasswordemail($emailto,$link,$templateid);
        return $send;
    }
	
	public function getuserdetails($userid){
		$user = User::where('id',$userid)->first();
		return $user;
	} 
	
	public function updateprovider(Request $request){
		$id = $request->id;
		$sendemail = $request->sendemail ?? false;
		$requestuser = $this->getuserdetails($request->user);
		
		if(!$requestuser){
			return response()->json([
			'message'  => 'invalid user',
		], 201);
		}
		
		$validated = $request->validate([
			'text'			=> 'required|string',
			'contactName'	=> 'required|string|max:100',
			'phone'			=> 'nullable|string|max:30',
			'email'    		=> 'required|email|max:100',
            'website'		=> 'nullable|string|max:100',
			'add1'			=> 'string|max:100',
			'add2'			=> 'string|max:100',
			'add3'			=> 'string|max:100',
			'postcode'		=> 'required|string|max:30',
			'latitude'  	=> 'nullable|numeric|between:-90,90',
    		'longitude' 	=> 'nullable|numeric|between:-180,180',
			'logo'			=> 'nullable|string|max:200',
            
        ]);
		
		$data = [
			'provider_display_name' => $validated['text'],
			'provider_contact'      => $validated['contactName'],
			'provider_phone'        => $validated['phone'] ?? null,
			'provider_email'        => $validated['email'],
			'provider_website'      => $validated['website'],
			'provider_add1'         => $validated['add1'],
			'provider_add2'         => $validated['add2'],
			'provider_add3'         => $validated['add3'],
			'provider_postcode'     => $validated['postcode'],
			'latitude'     			=> $validated['latitude'],
			'longitude'   			 => $validated['longitude'],
			'provider_logo'			=> $validated['logo'] ?? null,
		];
		
		
		if ($id > 0) {
        //  UPDATE
			$provider = Provider::findOrFail($id);
			$provider->update($data);
			$created = false;
			$useremail = 30;
		} else {
			// CREATE
			$provider = Provider::create($data);
			$created = true;
			$useremail = 29;

            // create login user
            $user = new User();
            $user->email = $provider->provider_email;
            $user->provider = $provider->id;
            $user->save();
		}


		$email = 'none';
		// Send admin update email
		if($requestuser->role == 1){
			$id = 19; // admin provider update
			$data = 'Provider '.$provider->provider_display_name;
			$email = $this->sendemailtemplateadmin($id,$data);
		} 
		
		if($requestuser->role == 9){
			if($sendemail === true){
			$data = 'Provider '.$provider->provider_display_name;
			$email = $this->sendemailtemplate($useremail,$data,$provider->provider_email);

            // send password set email if new admin provider
               if($id == 0) {
                   $sendlink = $this->adminsendpasswordlink($provider->provider_email);
               }
			}
			// set provider approved as is admin
			$provider->provider_status = 1;
			$provider->save();
		}

		return response()->json([
			'message'  => $created ? 'created' : 'updated',
			'provider' => $provider,
			'user'	   => $user,
			'email'	   => $email,
            'sendlink' => $sendlink ?? null,
		], 201);

	}
	
	public function deleteprovider(Request $request){
		
		$validated = $request->validate([
			'provider' 	=> 'required|integer',
			'status' 	=> 'required|integer',
			'user'		=> 'required|string|max:100'
			]);
		
		// check user creds
		$user = User::
			where('email',$validated['user'])
			->where('role',9)
			->first();
			
		if($user == null){
			return response()->json([
			'message'  => 'Authentication Failed'
			], 201);
		}
		
		$provider = Provider::findOrFail($validated['provider']);
		if($provider !== null){
		$accounts = User::where('provider',$provider->id)->get();
		}
		$listings = ProviderPage::select('id')->where('provider',$validated['provider'])->get();
		$cats = SPService::select('id')->whereIn('sp_page_id',$listings)->get();
		
		if($validated['status'] == 9){
			$updateprovider = $provider->delete();
            $updateuser = User::where('provider', $provider->id)->delete();
			$type = 6;
			$event = $this->createevent($type,$provider->id,0,$user->id,0);
			
			$updatepages = ProviderPage::whereIn('id', $listings)->delete();
			$type = 23;
			foreach($listings as $listing){
				$event = $this->createevent($type,$provider->id,$listing['id'],$user->id,0);
			}
			
			$updatecats = SPService::whereIn('id', $cats)->delete();
		} else {
			if($provider !== null){
                // Archive all users for that provider
                $updateuser = User::where('provider', $provider->id)
                    ->update([
                        'archive' => 1
                    ]);

				$updateprovider = $provider->update(['provider_archive' => 1,'provider_status' => 9]);
				$type = 6;
				$event = $this->createevent($type,$provider->id,0,$user->id,0);
			}
		$updatepages = ProviderPage::whereIn('id', $listings)->update(['sp_status' => 9,'archive' => 1]);
		$updatecats = SPService::whereIn('id', $cats)->update(['archive' => 1]);
		}
		
		
		return array('P'=>$updateprovider,'U'=>$updateuser,'L'=>$updatepages,'C'=>$updatecats);
		
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
	
	public function getproviders(Request $request)
	{
		$query = Provider::query();
		$sortBy = $request->sort_by;
		$sortDir = $request->sort_dir;
		
		// SEARCH MODE (ignores status)
		if ($request->filled('search')) {
			$search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('provider_display_name', 'LIKE', "%{$search}%")
                    ->orWhere('provider_email', 'LIKE', "%{$search}%");
            });
		}
		
		
		if($request->status != 99){
				$query->where('provider_status',$request->status);
		} 
		
		
		// Sorting
		switch ($sortBy) {

			case 'created_at':
				$query->orderBy('created_at', $sortDir);
				break;
				
			case 'updated_at':
				$query->orderBy('updated_at', $sortDir);
				break;

			case 'text':
				$query->orderBy('provider_display_name', $sortDir);
				break;

			case 'status_text':
				$query->orderBy('provider_status', $sortDir);
				break;
				
			case 'pages':
				$query->orderBy('provider_listings', $sortDir);
				break;

			default:
				$query->orderBy('created_at', 'desc');
		}
		
		$states = ProviderState::select('status as value','status_text as text')->get();
	
		//  Pagination
		$perPage = (int) $request->get('per_page', 10);

		if ($perPage === -1) {
			$perPage = 9999;
		};

		// Normal paginated response
		$paginator = $query->paginate($perPage);
		$providers = ProviderAdminResourceList::collection($paginator);
		
		return response()->json([
				'providers' => $providers,
				'meta' => [
					'states' => $states,
					'total'  => $paginator->total(),
					'perPage'=> -1,
				],
			]);
		
	}
	
	public function updatelisting(Request $request){
	
		$cats = $request->cats;
		$providerid = $request->provider;
		$changed = false;
		
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
			'provider.value'		=> 'nullable|integer',
			'provider.id'			=> 'nullable|integer',
			'user'					=> 'required|integer'
			]);
			
			
			$pageid = $validated['listing']['value'] ?? null;
			$sendemail = $request->sendemail ?? true;
			
		 	$providerid = $validated['provider']['id']
				?? $validated['provider']['value']
				?? null;
		
			if($providerid == null){
				return response()->json([
					'message'  => 'error',
					'page' => null,
				], 201);
			}
		
			
		if(count($cats) > 0 && $pageid != null){
			// remove current cats
			$listingcats = SPService::where('sp_page_id',$pageid)->delete();
		}
		
		$data = [
			'user_id'		=> $validated['user'],
			'provider'		=> $providerid,
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
		// Check if anything changed
		$page->fill($data); 
		if ($page->isDirty()) { $changed = true;}

		
        $page->update($data);
        $created = false;
		} else {
			// CREATE
			$page = ProviderPage::create($data);
			$created = true;
		}
		
		foreach($cats as $cat){
			$parent = ServiceCat::where('service_cat_id',$cat)->first();
			if($parent != null){
				$service = [
					'sp_page_id' => $page->id,
					'cat_id' => $cat,
					'parent_cat_id' => $parent->service_cat_parent
				];
				
				SPService::insert($service);
			}
		}
		
		$user = User::where('id',$validated['user'])->first();
		$role = $user->role; // 1 - user 9 - admin
		
		if($changed){ // if changed page
			$provider = Provider::where('id',$providerid)->first();
			if($role == 1){ 
				$useremail = $user->email;
				$status = 2; // if user always set for approval
				} 
				else {
				$useremail = $provider->provider_email;
				$status = $data['sp_status']; // if admin set status immeadiatley
				}
			// set page needs approval 
			$page->sp_status = $status;
			$page->save();
			
			// send emails 
			if ($sendemail === true) {
				
			$data = 'Provider: '.$provider->provider_display_name.'<br/>'.'Listing: '.$page->sp_title_1.' , '.$page->sp_title_2.'<br/>'.'User: '.$user->email;
				
			if($role == 1){ // User Change
				$id = 20; // Listing Awaiting Approval - Admin Notify
				$mail = $this->sendemailtemplateadmin($id,$data);

				$id = 21; // Listing Awaiting Approval - User Notify
				$mail = $this->sendemailtemplate($id,$data,$useremail);
			}
				
			if($role == 9){ // Admin Change
				if($created){
				$id = 27; // Admin Listing Created - User Notify
				} else $id = 28; // Admin Listing Updated - User Notify
				$mail = $this->sendemailtemplate($id,$data,$useremail);
			}
				
			}

		} else $id = null;
		
		return response()->json([
			'message'  => $created ? 'created' : 'updated',
			'page' => $page
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

		return [
			'Pages'    => new ProviderPageResourceFull($page),
			'Provider' => new ProviderAdminResource($provider),
			'PCats'    => SPServiceResource::collection($pcats),
			'CCats'    => SPServiceResource::collection($ccats),
			];
	}
	
	public function deletelisting(Request $request){
		$validated = $request->validate([
			'listing' 				=> 'required|integer',
			'user'					=> 'required|integer',
		]);
		
		// check  user creds
		$user = User::
			where('id',$validated['user'])
			->first();
			
		if($user == null){
			return response()->json([
			'message'  => 'User Authentication Failed'
			], 201);
		}
		
		if($user->role == 9){ // admin delete
			$page = ProviderPage::findOrFail($validated['listing']);
		} else { // user delete
			$page = ProviderPage::where('id', $validated['listing'])
			->where('provider', $user->provider)
			->firstOrFail();
		}
		
		$page->archive = 1;
		$page->sp_status = 9;
		$page->save();
		
		// delete cats
		$delcats = SPService::where('sp_page_id',$page->id)->delete();
		
		return $page;
	}

	public function getlistings(Request $request){
	
		$query = ProviderPage::query();
		
		if($request->provider) {
			$query->where('provider',$request->provider);
			return array('Pages'=>ProviderPageResourceFull::collection($query->get()));
		}

		if ($request->filled('search')) {

			$search = $request->search;

			$query->where(function ($q) use ($search) {
				$q->where('sp_title_1', 'LIKE', "%{$search}%");
			});

		} 
		
		if($request->status != 99){
				$query->where('sp_status', $request->status);
			} 
		
		//  Sorting
		$sortBy  = $request->input('sort_by', 'created_at');
		$sortDir = $request->input('sort_dir', 'desc');
		
		switch ($sortBy) {

			case 'created_at':
				$query->orderBy('provider_pages.created_at', $sortDir);
				break;
				
			case 'updated_at':
				$query->orderBy('provider_pages.updated_at', $sortDir);
				break;

			case 'text':
				$query->orderBy('provider_pages.sp_title_1', $sortDir);
				break;

			case 'provider':
				$query
					->leftJoin('providers', 'providers.id', '=', 'provider_pages.provider')
					->orderBy('providers.provider_text', $sortDir)
					->select('provider_pages.*'); // IMPORTANT
				break;

			case 'status':
				$query->orderBy('provider_pages.sp_status', $sortDir);
				break;

			default:
				$query->orderBy('provider_pages.created_at', 'desc');
		}
	
		
		// Pagination
		$perPage = (int) $request->get('per_page', 10);

		if ($perPage === -1) {
			$perPage = 9999;
		}
		// Normal paginated response
		$paginator = $query->paginate($perPage);
		$pages = ProviderPageResourceAdmin::collection($paginator);
		
		return response()->json([
				'pages' => $pages,
				'meta' => [
					'states' => PublishState::select('status as value','status_text as text')->get(),
					'total'  => $paginator->total(),
					'perPage'=> -1,
				],
			]);
	
	}
	
	
	function getemailtemplates(Request $request){
		$templates = EmailTemplate::where('archive',0)->orderBy('email_name','asc')->get();
		return array('templates'=>$templates);
	}
	
	function getemailadmins(){
		$emails = SystemSettings::select('admin_email','admin_email2','admin_email3')->first();
		$response[] = array('value'=>1,'text'=>$emails['admin_email']);
		$response[] = array('value'=>2,'text'=>$emails['admin_email2']);
		$response[] = array('value'=>3,'text'=>$emails['admin_email3']);
		return array('emails'=>$response);
	}
	
	function updatetemplate(Request $request){
		
		$validated = $request->validate([
			'template.id' 			=> 'required|integer',
			'template.admin_email' 	=> 'required|integer',
			'template.email_name'	=> 'required|string|max:100',
			'template.email_subject'=> 'required|string|max:100',
			'template.email_body'	=> 'required|string|max:5000',
		]);
		
		$id = $validated['template']['id'];
		
		
		if( $id == 0){
			$template = new EmailTemplate;
		} else {
			// update
			$template = EmailTemplate::where('id',$id)->first();
		}
			$template->admin_email = $validated['template']['admin_email'];
			$template->email_name = $validated['template']['email_name'];
			$template->email_subject = $validated['template']['email_subject'];
			$template->email_body = $validated['template']['email_body'];
			$template->save();
		
		}
	
	function deletetemplate(Request $request){
		$validated = $request->validate([
			'id' 	=> 'required|integer'
		]);
		
		$template = EmailTemplate::where('id',$validated['id'])->delete();
		return $template;
	}
	
	function testemail(){
	
		$template = EmailTemplate::find(17);

		$data = [
			'subject' => $template->email_subject,
		];

		$test = Mail::to('rod@offgridwebdesign.co.uk')->send(
			new TemplateEmail($template->email_body, $data)
		);
		return $test;
	}

    function sendemailtemplateadmin($id, $data)
    {
        try {
            $template = EmailTemplate::find($id);

            if (!$template) {
                return [
                    'error' => true,
                    'message' => 'Template not found',
                ];
            }

            $adminemails = $this->getemailadmins();

            if (
                empty($adminemails['emails']) ||
                !isset($adminemails['emails'][$template->admin_email - 1]['text'])
            ) {
                return [
                    'error' => true,
                    'message' => 'Admin email not found',
                ];
            }

            $emailto = $adminemails['emails'][$template->admin_email - 1]['text'];

            if (!filter_var($emailto, FILTER_VALIDATE_EMAIL)) {
                return [
                    'error' => true,
                    'message' => 'Invalid admin email address',
                    'email' => $emailto,
                ];
            }

            $message = $template->email_body . '<br/>' . $data;

            $mailData = [
                'subject' => $template->email_subject,
            ];

            Mail::to($emailto)->send(
                new TemplateEmail($message, $mailData)
            );

            return [
                'error' => false,
                'message' => 'Email sent successfully',
                'email' => $emailto,
            ];

        } catch (\Throwable $e) {
            \Log::error('Failed to send admin template email', [
                'template_id' => $id,
                'error' => $e->getMessage(),
            ]);

            return [
                'error' => true,
                'message' => 'Failed to send email'.$e->getMessage(),
            ];
        }
    }
	function oldsendemailtemplateadmin($id,$data){
		
		$template = EmailTemplate::where('id',$id)->first();
		if($template == null){
			return array('error'=>'template not found');
		}
		
		$adminemails = $this->getemailadmins();
		$emailto = $adminemails['emails'][$template->admin_email - 1]['text'];
		
		$message = $template->email_body;
		$message = $message."<br/>".$data;
	
		$data = [
			'subject' => $template->email_subject,
		];

		Mail::to($emailto)->send(
			new TemplateEmail($message, $data)
		);
		return array($emailto,'error'=>false);
	}

    function sendemailtemplate($id, $data, $emailto)
    {
        try {
            $template = EmailTemplate::find($id);

            if (!$template) {
                return [
                    'error' => true,
                    'message' => 'Template not found',
                ];
            }

            if (empty($emailto)) {
                return [
                    'error' => true,
                    'message' => 'Recipient email is required',
                ];
            }

            if (!filter_var($emailto, FILTER_VALIDATE_EMAIL)) {
                return [
                    'error' => true,
                    'message' => 'Invalid email address',
                    'email' => $emailto,
                ];
            }

            $message = $template->email_body . '<br/>' . $data;

            $mailData = [
                'subject' => $template->email_subject,
            ];

            Mail::to($emailto)->send(
                new TemplateEmail($message, $mailData)
            );

            return [
                'error' => false,
                'message' => 'Email sent successfully',
                'email' => $emailto,
            ];

        } catch (\Throwable $e) {
            \Log::error('Failed to send template email', [
                'template_id' => $id,
                'email' => $emailto,
                'error' => $e->getMessage(),
            ]);

            return [
                'error' => true,
                'message' => 'Failed to send email',
                'details' => config('app.debug') ? $e->getMessage() : null,
            ];
        }
    }

	function oldsendemailtemplate($id,$data,$emailto){

		$template = EmailTemplate::where('id',$id)->first();
		if($template == null){
			return array('error'=>'template not found');
		}

		$message = $template->email_body;
		$message = $message."<br/>".$data;

		$data = [
			'subject' => $template->email_subject,
		];

		Mail::to($emailto)->send(
			new TemplateEmail($message, $data)
		);
		return array($emailto,'error'=>false);
	}
	
	
	function sendverifyemail($emailto,$link){
		
		$template = EmailTemplate::where('id',5)->first();
		if($template == null){
			return array('error'=>'template not found');
		}
		
		$message = $template->email_body.'<br/><a href="'.$link.'">Setup my login password</a>';
	
		$data = [
			'subject' => $template->email_subject,
		];

		Mail::to($emailto)->send(
			new TemplateEmail($message, $data)
		);
		return array('error'=>false);
	} 
	
	function sendResetPasswordemail($emailto,$link,$tenplateid){ // template 6 - usual reset
		
		$template = EmailTemplate::where('id',$tenplateid)->first();
		if($template == null){
			return array('error'=>'template not found');
		}
		
		$message = $template->email_body.'<br/><a href="'.$link.'">Reset my login password</a>';
	
		$data = [
			'subject' => $template->email_subject,
		];

		Mail::to($emailto)->send(
			new TemplateEmail($message, $data)
		);
		return array('error'=>false);
	} 
	
	
	public function getstats(Request $request)
{
		if($request->start && $request->end){
			$startdate = $request->start;
			$enddate = $request->end;
		} else {
			$startdate = '2025-01-01 00:00:00';
			$enddate   = '2026-12-31 23:59:59';
		}
		
		//return array($startdate,$enddate);
		
		$stats = Tracking::select(
				DB::raw("DATE_FORMAT(track_date, '%Y-%m') as month"),
				'track_cat',
				DB::raw('COUNT(*) as total')
			)
			->whereBetween('track_date', [$startdate, $enddate])
			->groupBy('month', 'track_cat')
			->orderBy('month')
			->get();

		$cats = $this->servicecatsall();

		return [
			'stats' => $stats,
			'cats' => $cats,
			
		];
	}
	
	
	
	function servicecatsall()
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
		
		
	    return $results;
		   
    }
	
}