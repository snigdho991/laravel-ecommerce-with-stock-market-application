<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }
    
    public function footer()
    {
    	$footersettings = FooterSettings::find(1);    	
    	return view('admin.site.footer')->with('footersettings', $footersettings);
    }
}
