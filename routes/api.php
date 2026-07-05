<?php
use Illuminate\Http\Request;
Route::get('rodtesting','AdminController@rodtesting');
Route::post('contactform','MainController@processcontactform');
Route::post('passwordreset','AdminController@resetpassword');
Route::post('passwordresetverify','MainController@resetpasswordverify');
Route::get('getparentservicecats','MainController@parentservicecats');
Route::get('getservicecatsall','MainController@servicecatsall');
Route::get('maingetlisting','MainController@getlisting');
Route::get('getprovider','MainController@getprovider'); 
Route::get('getproviderstextsearch','MainController@indextext'); 
Route::post('register','MainController@register');
Route::post('checkverify','MainController@checkverify');
Route::get('checkuserexists','MainController@checkuserexists');
Route::get('checkversion','UsersController@checkversion');
	
Route::prefix('auth')->group(function () {
	Route::post('/vuelogin', 'AuthController@vuelogin');
	Route::post('/vueloginadmin', 'AuthController@vueloginadmin');
	
	//Route::post('reset-password', 'AuthController@sendPasswordResetLink');
    //Route::post('resetpassword', 'AuthController@callResetPassword');
});

Route::middleware('auth:sanctum')->prefix('auth')->group(function () {
    Route::post('/logout', 'AuthController@logout');
});

Route::group(['middleware' => ['auth:sanctum']], function () {

	Route::get('users','UsersController@index'); 
	Route::get('provider','MainController@getprovider'); 
	Route::get('getprovider','MainController@getproviderdetails');
	Route::get('providerlistings','MainController@getproviderlistings');
	Route::post('updatelisting','MainController@updatelisting');
	Route::post('imageupload','ImageController@imageupload'); 
	
	// Admin Only
	Route::get('rodtest','AdminController@rodtest'); 
	
	Route::get('systemsettings','AdminController@systemsettings');
	Route::get('adminresults','AdminController@adminresults'); 
	Route::get('getproviders','AdminController@getproviders');
	Route::get('admingetprovider','AdminController@getprovider');
	Route::get('admingetproviderusers','AdminController@getproviderusers');
	Route::get('getlistings','AdminController@getlistings'); 
	Route::get('admingetlisting','AdminController@getlisting');
	Route::post('adminupdatelistingstatus','AdminController@updatelistingstatus');
	Route::get('admincheckuserexists','AdminController@checkuserexists');
	Route::post('adminupdateuser','AdminController@updateuser');
	Route::post('admindeleteuser','AdminController@deleteuser');
	Route::post('adminupdateprovider','AdminController@updateprovider');
	Route::post('adminupdateproviderstatus','AdminController@updateproviderstatus');
	Route::post('admindeleteprovider','AdminController@deleteprovider');
	Route::post('adminupdatelisting','AdminController@updatelisting');
	Route::post('admindeletelisting', 'AdminController@deletelisting');
	Route::get('admingetemailtemplates', 'AdminController@getemailtemplates');
	Route::get('admingetemailadmins','AdminController@getemailadmins');
	Route::post('adminupdatetemplate', 'AdminController@updatetemplate');
	Route::post('admindeletetemplate', 'AdminController@deletetemplate');
	Route::get('admingetstats', 'AdminController@getstats');
	Route::post('adminupdatesystemsettings', 'AdminController@updatesystemsettings');

		
	
});