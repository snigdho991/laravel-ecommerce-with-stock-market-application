<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
		'status',
	];

	public function category()
	{
		return $this->belongsTo('App\Category', 'category_id');
	}

	public function subcategory()
	{
		return $this->belongsTo('App\Subcategory', 'subcategory_id');
	}

	public function childsubcategory()
	{
		return $this->belongsTo('App\ChildSubcategory', 'child_subcategory_id');
	}

	public function attributes()
	{
		return $this->hasMany('App\ProductsAttribute');
	}
}
