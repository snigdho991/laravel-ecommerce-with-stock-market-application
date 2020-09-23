<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $fillable = [
		'user_id', 'product_id', 'product_slug', 'ask_amount', 'total_pay', 'size',
	];
}
