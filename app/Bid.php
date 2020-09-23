<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
		'user_id', 'product_id', 'product_slug', 'bid_amount', 'total_pay', 'size',
	];

}
