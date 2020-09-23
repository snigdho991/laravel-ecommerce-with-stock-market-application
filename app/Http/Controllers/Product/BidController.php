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
use App\Bid;

use Auth;
use DB;
use Session;

class BidController extends Controller
{
    public function bid_product($slug, Request $request)
    {
        if(Auth::user()->stripe_id != null){
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
        } else {
            Session::flash('info-msg', 'Add a payment method to continue.');
            return view('payment-method');
        }
	}

	public function store_bid(Request $request)
	{
        if(!empty($request->total_pay)) {
    		$bid = new Bid;
    		$bid->user_id      = Auth::id();
            $bid->product_id   = $request->product_id;
            $bid->product_slug = $request->product_slug;
            $bid->size         = $request->size;
            $bid->bid_amount   = $request->bid_amount;
            $bid->total_pay    = $request->total_pay;
            $bid->status       = 1;

            $bid->save();

            Session::flash('noty-success', 'Bid Placed Successfully !');
            return redirect()->route('user.bids');
        } else {
            Session::flash('noty-error', 'This bid can not be placed due to security issue !');
            return redirect()->route('user.bids');
        }
	}

	public function user_bids()
    {
        $user = Auth::id();
        
        $bids = DB::table('bids')
    			    ->join('users', 'bids.user_id', 'users.id')
    				->join('products', 'bids.product_slug', 'products.product_slug')
    				->join('products_attributes', 'bids.size', 'products_attributes.size')
    				->select('bids.*', 'products.product_name', 'products.main_image', 'products.product_code', 'products_attributes.size')
    				->where('bids.user_id', $user)
    				->orderBy('bids.created_at', 'desc')
    				->get();
    	
        return view('all-bids')->with('bids', $bids);
    }
}
