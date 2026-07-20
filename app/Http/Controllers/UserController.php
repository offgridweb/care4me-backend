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
use App\ServiceCatText;
use App\ServiceCatKeyword;
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
use Illuminate\Support\Facades\Hash;

class MainController extends Controller 
{


	public function updateuser(Request $request){
	
		$id = $request->id;
		
		$validated = $request->validate([
			'fname'	   => 'required|string|max:100',
			'lname'	   => 'required|string|max:100',
            'email'    => 'required|string|max:100',
      		'password' => 'nullable|min:8|string|max:50',
			'provider' => 'required|integer'
        ]);
		
		// set role
		if($id > 0){
			$user = User::where('id',$id)->first();
			$role = $user->role;
		} else $role = 1;
	
		$data = [
			'fname' => $validated['fname'],
			'lname' => $validated['lname'],
			'email' => $validated['email'],
			'password' => $validated['password'],
			'provider' => $validated['provider'],
			'role' => $role,
		];
		
		
		if($id > 0){ // update
			$user = User::where('id',$id)->where('role',$role)->first();
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
		
		if($validated['status'] == 9){
			$archive = 1;
		} else $archive = 0;
		$data = [
			'sp_status' => $validated['status'],
			'archive' => $archive
		];
		
		$provider = ProviderPage::findOrFail($validated['id']);
        $provider->update($data);
		
		
		return $provider;
	}
	
	public function updateproviderstatus(Request $request){
		$validated = $request->validate([
			'id'		=> 'required|integer',
			'status'	=> 'required|integer'
		]);
		
		if($validated['status'] == 9){
			$archive = 1;
		} else $archive = 0;
		$data = [
			'provider_status' => $validated['status'],
			'provider_archive' => $archive
		];
		
		// update provider
		$provider = Provider::findOrFail($validated['id']);
        $provider->update($data);
		
		// update user
		
		$user = User::where('provider',$provider->id)->first();
		$user->archive = $archive;
		$user->save();
		
		return $provider;
	}
	
	public function updateprovider(Request $request){
		$id = $request->id;
		$validated = $request->validate([
			//'user'     		=> 'required|user',
			//'role'     		=> 'required|integer',
			'text'			=> 'required|string',
			'contactName'	=> 'required|string|max:100',
			'phone'			=> 'required|string|max:30',
			'email'    		=> 'required|email|max:100',
            'website'		=> 'string|max:100',
			'add1'			=> 'string|max:100',
			'add2'			=> 'string|max:100',
			'add3'			=> 'string|max:100',
			'postcode'		=> 'required|string|max:30',
			'latitude'  	=> 'nullable|numeric|between:-90,90',
    		'longitude' 	=> 'nullable|numeric|between:-180,180',
            
        ]);
		
		$data = [
			'provider_display_name' => $validated['text'],
			'provider_contact'      => $validated['contactName'],
			'provider_phone'        => $validated['phone'],
			'provider_email'        => $validated['email'],
			'provider_website'      => $validated['website'],
			'provider_add1'         => $validated['add1'],
			'provider_add2'         => $validated['add2'],
			'provider_add3'         => $validated['add3'],
			'provider_postcode'     => $validated['postcode'],
			'latitude'     			=> $validated['latitude'],
			'longitude'   			 => $validated['longitude'],
		];
		
		if ($id > 0) {
        //  UPDATE
        $provider = Provider::findOrFail($id);
        $provider->update($data);
        $created = false;
		} else {
			// CREATE
			$provider = Provider::create($data);
			$created = true;
		}

		return response()->json([
			'message'  => $created ? 'created' : 'updated',
			'provider' => $provider,
		], 201);

	}
	
	public function deleteprovider(Request $request){
		
		$validated = $request->validate([
			'provider' 	=> 'required|integer',
			'status' 	=> 'required|integer',
			'token'		=> 'required|string|max:100',
			'user'		=> 'required|string|max:100'
			]);
		
		// check token and user creds
		$user = User::
			where('email',$validated['user'])
			->where('token',$validated['token'])
			->where('role',9)
			->first();
			
		if($user == null){
			return response()->json([
			'message'  => 'Authentication Failed'
			], 201);
		}
		
		$provider = Provider::findOrFail($validated['provider']);
		$account = User::where('id',$provider->user)->first();
		$listings = ProviderPage::select('id')->where('provider',$validated['provider'])->get();
		$cats = SPService::select('id')->whereIn('sp_page_id',$listings)->get();
		
		if($validated['status'] == 9){
			$updateprovider = $provider->delete();
			$updatepages = ProviderPage::whereIn('id', $listings)->delete();
			$updatecats = SPService::whereIn('id', $cats)->delete();
		} else {
		$account->archive = 1;
		$account->save();
		$updateprovider = $provider->update(['provider_archive' => 1,'provider_status' => 9]);
		$updatepages = ProviderPage::whereIn('id', $listings)->update(['sp_status' => 9,'archive' => 1]);
		$updatecats = SPService::whereIn('id', $cats)->update(['archive' => 1]);
		}
		return array('P'=>$updateprovider,'L'=>$updatepages,'C'=>$updatecats);
		
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
				$q->where('provider_display_name', 'LIKE', "%{$search}%");
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
			$providers = ProviderAdminResourceList::collection($query->get());

			return response()->json([
				'providers' => [
					'providers' => $providers,
				],
				'meta' => [
					'states' => $states,
					'total'  => $providers->count(),
					'perPage'=> -1,
				],
			]);
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

		return [
			'Pages'    => new ProviderPageResourceFull($page),
			'Provider' => new ProviderAdminResource($provider),
			'PCats'    => SPServiceResource::collection($pcats),
			'CCats'    => SPServiceResource::collection($ccats),
			];
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

//		if ($perPage === -1) {
//			// Return ALL results (no pagination)
//			return ProviderPageResourceAdmin::collection(
//				$query->get()
//			);
//		}

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
	
	
}