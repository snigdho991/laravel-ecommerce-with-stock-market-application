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
use App\Ask;

use Auth;
use DB;
use Session;

class AskController extends Controller
{
    public function ask_product($slug, Request $request)
    {
    	$this->validate($request, [
            'ask_amount'  => 'required', /*|regex:/^[\pL\s\-]+$/u*/            
        ]);
        
        $product = Product::where('product_slug', $slug)->first();
        $pro_attr = ProductsAttribute::where(['product_id' => $request->product_id, 'size' => $request->size])->first();
        $ask_amount = $request->ask_amount;

        $check_coupon = Coupon::where('coupon_code', $request->coupon_code)->first();
        if (!empty($request->coupon_code)) {

        	if (!$check_coupon) {
	        	Session::flash('noty-error', 'Coupon is Invalid.');
	        } else {
	        	$dis_amount = $check_coupon->coupon_discount;
	        	$cou_code   = $check_coupon->coupon_code;
	        	return view('review-ask')->with('product', $product)->with('probuy_attr', $pro_attr)->with('cou_code', $cou_code)->with('dis_amount', $dis_amount)->with('ask_amount', $ask_amount)->with('total_pay', $request->total_pay)->with('transaction_fee_in', $request->transaction_fee_in)->with('payment_proc_in', $request->payment_proc_in);
	        }
	    }

    	return view('review-ask')->with('product', $product)->with('probuy_attr', $pro_attr)->with('ask_amount', $ask_amount)->with('total_pay', $request->total_pay)->with('transaction_fee_in', $request->transaction_fee_in)->with('payment_proc_in', $request->payment_proc_in);
	}

	public function store_ask(Request $request)
	{
		if(!empty($request->total_pay)) {
			$ask = new Ask;
			$ask->user_id      = Auth::id();
	        $ask->product_id   = $request->product_id;
	        $ask->product_slug = $request->product_slug;
	        $ask->size         = $request->size;
	        $ask->ask_amount   = $request->ask_amount;
	        $ask->total_pay    = $request->total_pay;
	        $ask->status       = 1;

	        $ask->save();

	        Session::flash('noty-success', 'Ask Placed Successfully !');
	        return redirect()->route('user.asks');
	    } else {
            Session::flash('noty-error', 'This ask can not be placed due to security issue !');
            return redirect()->route('user.asks');
        }
	}

	public function user_asks()
    {
        $user = Auth::id();
        
        $asks = DB::table('asks')
    			    ->join('users', 'asks.user_id', 'users.id')
    				->join('products', 'asks.product_slug', 'products.product_slug')
    				->join('products_attributes', 'asks.size', 'products_attributes.size')
    				->select('asks.*', 'products.product_name', 'products.main_image', 'products.product_code', 'products_attributes.size')
    				->where('asks.user_id', $user)
    				->orderBy('asks.created_at', 'desc')
    				->get();
    	
        return view('all-asks')->with('asks', $asks);
    }
}
