<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
		'category_name', 'subcategory_name', 'subcategory_slug',
	];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function childsubcategories()
	{
		return $this->hasMany('App\ChildSubcategory');
	}
}
