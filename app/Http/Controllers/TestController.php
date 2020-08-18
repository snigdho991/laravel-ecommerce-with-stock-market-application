<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function demu()
    {
    	return view('join');
    }

    public function custom(Request $request)
    {
    	$tab = $request->get('tab');
		return back()->withInput(['tab'=>$tab]);
    }
}
