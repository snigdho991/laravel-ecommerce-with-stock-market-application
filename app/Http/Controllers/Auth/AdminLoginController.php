<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin', ['except' => ['logout']]);
	}

    public function showLoginForm()
    {
    	return view('admin.auth.login');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
			'email'   => 'required|email',
			'password' => 'required|min:6',
		]);

		if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

			Session::flash('noty-success', 'You are successfully logged in !');
			return redirect()->intended(route('admin.dashboard'));
		}

		Session::flash('error', 'Invalid email or password !');
		return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    //Overrides 
    public function logout()
    {
    	Auth::guard('admin')->logout();

    	Session::flash('success', 'You are logged out !');
    	return redirect()->route('admin.login');
    }
}
