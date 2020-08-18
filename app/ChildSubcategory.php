<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildSubcategory extends Model
{
    protected $fillable = [
		'category_name', 'subcategory_slug', 'childsubcategory_name', 'childsubcategory_slug', 
	];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function subcategory()
	{
		return $this->belongsTo('App\Subcategory');
	}
}
