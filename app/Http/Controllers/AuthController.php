<?php
namespace App\Http\Controllers;
use App\User;
use App\Provider;
use App\SystemEvent;
use App\SystemSettings;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
	use SendsPasswordResetEmails;
    
	public function vuelogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();
	
    if (!$user) {
        return response()->json([
            'status' => 'login error',
            'user' => null,
            'provider' => null,
            'token' => null
        ]);
    }

    $inputPassword = $request->password;
    $loginSuccess = false;

    // ✅ Case 1 — bcrypt (normal Laravel)
    if (Hash::check($inputPassword, $user->password)) {
        $loginSuccess = true;
    }

    // ✅ Case 2 — legacy MD5
    elseif (strlen($user->password) === 32 && md5($inputPassword) === $user->password) {
        
        // 🔄 Upgrade to bcrypt
        $user->password = Hash::make($inputPassword);
        $user->save();

        $loginSuccess = true;
    }

    if (!$loginSuccess) {
        return response()->json([
            'status' => 'login error',
            'user' => null,
            'provider' => null,
            'token' => null
        ]);
    }

    // ✅ Log user in
    Auth::login($user);

    // ✅ Create Sanctum token
    $token = $user->createToken('token-name')->plainTextToken;

    $provider = Provider::where('id', $user->provider)->first();

    if (!$provider) {
        return response()->json([
            'status' => 'login error',
            'user' => null,
            'provider' => null,
            'token' => null
        ]);
    }
		
	$user->last_active = date('Y-m-d H:i:s');
	$user->save();

    $provider->value = $provider->id;
	$user->token = $token;
		
	$system = SystemSettings::first();
	$user->version = $system->user_version;
		
	$eventdata = [
			'provider_id' 	=> $provider->id ?? null,
			'listing_id'  	=> 0,
			'type'		=> 30,
			'user'		=> $user->id ?? null,
			'status'	=> 1
		];
		
		$event = new SystemEvent;
		$event->fill($eventdata); 
		$event->save();

    return response()->json([
	    'status' => 'ok',
        'user' => $user,
        'provider' => $provider,
        //'token' => $token
    ]);
}
	
	
	public function vueloginadmin(Request $request)
    {
		
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
        $user = Auth::user();
		$token = $user->createToken('token-name');
		$user->token = 	$token->plainTextToken;
		//$user->last_login = date("Y-m-d H:i:s");
		$user->save();
		$user->token = $token;
			
		$system = SystemSettings::first();
		$user->version = $system->admin_version;

		$eventdata = [
				'provider_id' 	=> null,
				'listing_id'  	=> null,
				'type'		=> 30,
				'user'		=> $user->id ?? null,
				'status'	=> 1
			];
		
		$event = new SystemEvent;
		$event->fill($eventdata); 
		$event->save();

		
		  return response()->json([
            'status'   => 'ok',
            'user' 		=> 	$user,
			'token' 	=> 	$token->plainTextToken
          ]); 
        } else { 
          return response()->json([
            'status' => 'login error',
            'user'   => 0,
			'token' => '' 
          ]); 
        } 
    }
	
	
    public function logout(Request $request)
	{
		$user = $request->user();

		if (!$user) {
			return response()->json(['status' => 'not authenticated'], 401);
		}

		$provider = Provider::find($user->provider);

		// delete current token
		$user->currentAccessToken()->delete();

		SystemEvent::create([
			'provider_id' => $provider->id ?? null,
			'listing_id'  => 0,
			'type'        => 31,
			'user'        => $user->id,
			'status'      => 0
		]);

		return response()->json([
			'status' => 'ok'
		]);
	}
	
	
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response()->json([
            'status' => 'success',
            'data' => $user
        ]);
    }
	
    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'successs'], 200)
                ->header('Authorization', $token);
        }
        return response()->json(['error' => 'refresh_token_error'], 401);
    }
	
    private function guard()
    {
        return Auth::guard();
    }
	
	public function callResetPassword(Request $request)
	{
		return $this->reset($request);
	}
	
	public function reset(Request $request)
    {
       		$input = $request->only('email','token', 'password', 'password_confirmation');
			$validator = Validator::make($input, [
				'token' => 'required',
				'email' => 'required|email',
				'password' => 'required|confirmed|min:8',
			]);
			if ($validator->fails()) {
				return response()->json($validator->errors());
			}
			$response = Password::reset($input, function ($user, $password) {
				$user->password = Hash::make($password);
				$user->save();
			});
			$message = $response == Password::PASSWORD_RESET ? 'Password reset successfully' : 'Unknown Error';
			return response()->json($message);
	}
	
	protected function resetPassword($user, $password)
	{
    $user->password = Hash::make($password);
    $user->save();
    event(new PasswordReset($user));
	}
	
	public function sendPasswordResetLink(Request $request)
	{
    return $this->sendResetLinkEmail($request);
	}
	
	protected function sendResetLinkResponse(Request $request, $response)
	{
    return response()->json([
        'message' => 'Password reset email sent.',
        'data' => $response
		]);
	}
	
	protected function sendResetLinkFailedResponse(Request $request, $response)
	{
    return response()->json(['message' => 'Email could not be sent to this email address.']);
	}
	
	protected function sendResetResponse(Request $request, $response)
	{
    return response()->json(['message' => 'Password reset successfully.']);
	}
	
	protected function sendResetFailedResponse(Request $request, $response)
	{
    return response()->json(['message' => 'Failed, Invalid Token.']);
	}
}