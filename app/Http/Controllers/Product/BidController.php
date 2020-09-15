<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Subcategory;
use App\ChildSubcategory;
use App\ProductsAttribute;
use App\FollowingProduct;
use App\Coupon;

use Auth;
use DB;
use Session;

class BidController extends Controller
{
    public function bid_product($slug, Request $request)
    {
        $this->validate($request, [
            'bid_amount'  => 'required', /*|regex:/^[\pL\s\-]+$/u*/            
        ]);
        
        $product = Product::where('product_slug', $slug)->first();
        $pro_attr = ProductsAttribute::where(['product_id' => $request->product_id, 'size' => $request->size])->first();
        $bid_amount = $request->bid_amount;

        $check_coupon = Coupon::where('coupon_code', $request->coupon_code)->first();
        if (!empty($request->coupon_code)) {
        	if (!$check_coupon) {
	        	Session::flash('noty-error', 'Coupon is Invalid.');
	        } else {
	        	$dis_amount = $check_coupon->coupon_discount;
	        	$cou_code   = $check_coupon->coupon_code;
	        	return view('review-bid')->with('product', $product)->with('probuy_attr', $pro_attr)->with('cou_code', $cou_code)->with('dis_amount', $dis_amount)->with('bid_amount', $bid_amount);
	        }
	    }

    	return view('review-bid')->with('product', $product)->with('probuy_attr', $pro_attr)->with('bid_amount', $bid_amount);
	}
}
