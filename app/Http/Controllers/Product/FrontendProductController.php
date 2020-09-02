<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;
use App\ChildSubcategory;
use App\ProductsAttribute;

class FrontendProductController extends Controller
{
	public function frontend_single_product($slug)
	{
		$product = Product::with(['category' => function($query){  
                    $query->select('id', 'category_name');
                }, 'subcategory' => function($query){
                    $query->select('id', 'subcategory_name');
                }, 'childsubcategory' => function($query){
                    $query->select('id', 'childsubcategory_name');
                }])->where('products.product_slug', $slug)->first();

    	$productattr = Product::with('attributes')->where('product_slug', $slug)->first();

    	dd($product);

    	return view('product-details')->with('product', $product)->with('productattr', $productattr);
	}
    
}
