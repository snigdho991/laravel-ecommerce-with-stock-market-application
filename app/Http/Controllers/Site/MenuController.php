<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MenuSettings;
use Session;

class MenuController extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth:admin');
    }
    
    public function menu()
    {
    	$menusettings = MenuSettings::find(1);    	
    	return view('admin.site.menu')->with('menusettings', $menusettings);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'my_account'   => 'required|max:255',
            'wishlist'     => 'required|max:255',
            'login'        => 'required|max:255',
            'registration' => 'required|max:255',
            'home'         => 'required|max:255',
            'shop_all'     => 'required|max:255',
            'browse'       => 'required|max:255',
            'portfolio'    => 'required|max:255',
            'help'         => 'required|max:255',
            'sell'         => 'required|max:255',
        ]);
        
        $id = 1;
        
        $check_menu = MenuSettings::where('id', $id)->where('my_account', $request->my_account)->where('wishlist', $request->wishlist)->where('login', $request->login)->where('registration', $request->registration)->where('home', $request->home)->where('shop_all', $request->shop_all)->where('browse', $request->browse)->where('portfolio', $request->portfolio)->where('help', $request->help)->where('sell', $request->sell)->first();

        if ($check_menu) {
        	Session::flash('noty-warning', 'Nothing has benn updated !');
	        return redirect()->route('menusettings');
        } else {

	        $menu = MenuSettings::find($id);
	        $menu->my_account   = $request->my_account;
	        $menu->wishlist     = $request->wishlist;
	        $menu->login        = $request->login;
	        $menu->registration = $request->registration;
	        $menu->home         = $request->home;
	        $menu->shop_all     = $request->shop_all;
	        $menu->browse       = $request->browse;
	        $menu->portfolio    = $request->portfolio;
	        $menu->help         = $request->help;
	        $menu->sell         = $request->sell;
	        
	        $menu->update();	     

	        Session::flash('noty-success', 'Menu Settings Saved Successfully !');
	        return redirect()->route('menusettings');
	    }
    }
}
