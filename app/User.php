<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

class User extends Authenticatable implements Auditable
{
   	use \OwenIt\Auditing\Auditable;
	use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname','email', 'password', 'link', 'provider','password_reset','archive'
    ];
	
	 protected $auditExclude = [
        'last_active'
		 ];
		 
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
	public function roles()
	{	
		return $this->hasOne('App\Role', 'id', 'role')->withDefault(['title' => '-']);	
	}
	
	public function providers()
	{	
		return $this->hasOne('App\Provider', 'id', 'provider')->withDefault(['provider_display_name' => '-']);	
	}
	
	
	
	public function sendPasswordResetNotification($token)
	{
    $this->notify(new \App\Notifications\MailResetPasswordNotification($token));
	}
	

}
