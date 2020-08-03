<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
	
    public function index()
    {
    	return view('admin.dashboard');
    }

    /*
    public function showLoginForm()                         //Previous
    {
    	if (!Auth::guard('admin')->check()) {
    		return view('admin.auth.login');
    	} else {
    		return redirect()->back();
    	}
    }

    public function login(Request $request)
    {
    	$data = $request->all();
    	if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
    			Session::flash('noty-success', 'You are successfully logged in !');
	    		return redirect()->route('admin.dashboard');
	    	} else {
	    		Session::flash('error', 'Invalid email or password !');
	    		return redirect()->back();
	    	}
    }

    public function logout()
    {
    	Auth::guard('admin')->logout();

    	Session::flash('success', 'You are logged out !');

    	return redirect('/admin');
    }*/
}
