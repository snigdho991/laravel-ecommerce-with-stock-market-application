<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSettings extends Model
{
    protected $fillable = [
		'my_account', 'wishlist', 'home', 'shop_all', 'browse', 'portfolio', 'help', 'login', 'registration', 'sell', 
	];
}
