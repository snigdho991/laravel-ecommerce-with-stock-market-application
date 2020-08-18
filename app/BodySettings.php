<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodySettings extends Model
{
    protected $fillable = [
		'recenty_view_items', 'popular_products', 'new_lowest_asks', 'new_highest_bids',
	];
}
