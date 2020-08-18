<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialSettings;
use Session;

class SocialController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function social()
    {
    	$socials = SocialSettings::all();
    	return view('admin.site.social')->with('socials', $socials);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'social_link' => 'required|max:255'
        ]);

        $new_social_link = $request->social_link;
        $check_social = SocialSettings::where('social_link', $new_social_link)->first();
        
        if ($check_social) {
            Session::flash('noty-warning', 'Social link already exists. Update denied.');
            return redirect()->route('socialsettings');
        } else {
            $social = SocialSettings::find($id);
            $social->social_link = $request->social_link;
            $social->save();

            Session::flash('noty-info', 'Social Link Updated Successfully !');
            return redirect()->route('socialsettings');
        }
    }

    public function change_status(Request $request, $id)
    {
    	$social = SocialSettings::find($id);

        if ($social->status == 1) {

        	$social->status = 0;
            $social->update();

            Session::flash('noty-error', 'Social Icon has been disabled !');
            return redirect()->route('socialsettings');
            
        } else {

            $social->status = 1;
            $social->update();

            Session::flash('noty-success', 'Social Icon has been enabled Successfully !');
            return redirect()->route('socialsettings');
        }
    }
}
