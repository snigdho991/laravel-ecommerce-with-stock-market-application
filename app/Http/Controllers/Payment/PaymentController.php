<?php

namespace App\Http\Controllers\Payment;

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

class PaymentController extends Controller
{
    public function add_stripe()
    {
    	if(Auth::user()->stripe_id == null){
	    	$user = Auth::user();
	    	$data = [
	    		'intent' => $user->createSetupIntent()
	    	];

	    	return view('add-stripe')->with($data);
	    } else {
	    	Session::flash('noty-warning', 'You have already added card details !');
            return redirect()->route('index');
	    }
    }

    public function save_card(Request $request)
    {
    	$user = Auth::user();
    	$paymentMethod = $request->payment_method;
    	$user->createAsStripeCustomer();
    	$user->addPaymentMethod($paymentMethod);

    	return response(['status' => 'success']);
    }

    public function buy_now(Request $request)
    {
    	if(Auth::user()->stripe_id == null){
    		$user = Auth::user();
	    	$data = [
	    		'intent' => $user->createSetupIntent()
	    	];

	    	return view('add-stripe')->with($data);
    	} else {
    		$be_paid = $request->lowest_ask_amount;
    		return view('checkout')->with('be_paid', $be_paid);
    	}
    }

    public function buy_via_card(Request $request)
    {
    	\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    	$charge = \Stripe\Charge::create([
		    'amount' => $request->amount, // $15.00 this time
		    'currency' => 'usd',
		    'customer' => Auth::user()->stripe_id, // Previously stored, then retrieved
		]);

    }

}
