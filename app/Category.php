<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
		'category_name', 'category_slug',
	];

	public function subcategories()
	{
		return $this->hasMany('App\Subcategory');
	}

	public function childsubcategories()
	{
		return $this->hasMany('App\ChildSubcategory');
	}
}
