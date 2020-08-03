<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

/*use Illuminate\Database\Eloquent\Model;*/

class Admin extends Authenticatable
{
	use Notifiable;
	
	protected $guard = 'admin';
    
    protected $fillable = [
        'name', 'email', 'phone', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
}
