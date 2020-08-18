<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coupon;
use Session;

class CouponController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function coupon()
    {
    	$coupons = Coupon::all();
    	return view('admin.coupon.coupon')->with('coupons', $coupons);
    }
    
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'coupon_code'     => 'required|max:255',
            'coupon_discount' => 'required|max:255'
        ]);

        $new_coupon_code = $request->coupon_code;

        $check_coupon_code = Coupon::where('coupon_code', $new_coupon_code)->first();
        
        if ($check_coupon_code) {
        	Session::flash('noty-error', 'Coupon already created. Try different one.');
	        return redirect()->route('coupon');
        } else {
	        $coupon = new Coupon;
	        $coupon->coupon_code     = $request->coupon_code;
	        $coupon->coupon_discount = $request->coupon_discount;
	        $coupon->save();

	        Session::flash('noty-success', 'Coupon Added Successfully !');
	        return redirect()->route('coupon');
	    }
    }

    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'coupon_code'     => 'required|max:255',
            'coupon_discount' => 'required|max:255'
        ]);

        $new_coupon_code = $request->coupon_code;

        $check_coupon_code = Coupon::where('coupon_code', $new_coupon_code)->first();
        
        $coupon = Coupon::find($id);
        if ($check_coupon_code) {
        	if ($request->status == 1) {
	        	$coupon->status = 1;
	        	$coupon->coupon_discount = $request->coupon_discount;

	        	$coupon->save();        	
	        	Session::flash('noty-success', 'Coupon has been enabled but code isn\'t updated.');
		        return redirect()->route('coupon');
	        } else {
	        	$coupon->status = 0;
	        	$coupon->coupon_discount = $request->coupon_discount;

	        	$coupon->save();
	        	Session::flash('noty-error', 'Coupon has been disabled but code isn\'t updated.');
		        return redirect()->route('coupon');
	        }

        } else {
	        $coupon->coupon_code     = $request->coupon_code;
	        $coupon->coupon_discount = $request->coupon_discount;

	        if ($request->status == 1) {
	        	$coupon->status = 1;
	        } else {
	        	$coupon->status = 0;
	        }

	        $coupon->save();

	        Session::flash('noty-info', 'Coupon Updated Successfully !');
	        return redirect()->route('coupon');
	    }
    }
}
