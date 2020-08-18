<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BodySettings;
use Session;

class BodyController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }
    
    public function body()
    {
    	$bodysettings = BodySettings::find(1);    	
    	return view('admin.site.body')->with('bodysettings', $bodysettings);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'recenty_view_items' => 'required|max:255',
            'popular_products'   => 'required|max:255',
            'new_lowest_asks'    => 'required|max:255',
            'new_highest_bids'   => 'required|max:255',
        ]);
        
        $id = 1;
        
        $check_body = BodySettings::where('id', $id)->where('recenty_view_items', $request->recenty_view_items)->where('popular_products', $request->popular_products)->where('new_lowest_asks', $request->new_lowest_asks)->where('new_highest_bids', $request->new_highest_bids)->first();

        if ($check_body) {
        	Session::flash('noty-warning', 'Nothing has benn updated !');
	        return redirect()->route('bodysettings');
        } else {

	        $body = BodySettings::find($id);
	        $body->recenty_view_items = $request->recenty_view_items;
	        $body->popular_products   = $request->popular_products;
	        $body->new_lowest_asks    = $request->new_lowest_asks;
	        $body->new_highest_bids   = $request->new_highest_bids;
	        
	        $body->update();	     

	        Session::flash('noty-success', 'Body Settings Saved Successfully !');
	        return redirect()->route('bodysettings');
	    }
    }
}
