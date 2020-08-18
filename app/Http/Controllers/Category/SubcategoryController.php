<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Subcategory;
use Session;

class SubcategoryController extends Controller
{
	
	public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function subcategory()
    {
    	$categories = Category::all();
    	
    	$subcategories = DB::table('subcategories')
    					   ->join('categories', 'subcategories.category_slug', 'categories.category_slug')
    					   ->select('subcategories.*', 'categories.category_slug', 'categories.category_name')
    					   ->orderBy('categories.category_slug', 'desc')
    					   ->get();
    	return view('admin.category.subcategory')->with('categories', $categories)
    										  ->with('subcategories', $subcategories);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'subcategory_name' => 'required|max:255',
        ]);

    	// Check subcategory avaiability
        $new_subcat_slug = str_slug($request->subcategory_name);
        $check_subcat = Subcategory::where('subcategory_slug', $new_subcat_slug)->first();


        // Check Category avaiability
        $check_cat = Category::where('category_slug', $new_subcat_slug)->first();
        

        if ($check_cat) {
        	Session::flash('noty-error', 'Requested name already exists as a Category !');
	        return redirect()->route('subcategory');
        } else if ($check_subcat) {
        	Session::flash('noty-error', 'Subcategory already exists. Try different one.');
	        return redirect()->route('subcategory');
        } else {
	        $subcategory = new Subcategory;
	        $subcategory->category_slug = $request->category_slug;
	        $subcategory->subcategory_name = $request->subcategory_name;
	        $subcategory->subcategory_slug = str_slug($request->subcategory_name);
	        $subcategory->save();

	        Session::flash('noty-success', 'Subcategory Added Successfully !');
	        return redirect()->route('subcategory');
	    }
    }

    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subcategory_name' => 'required|max:255'
        ]);

        // Check subcategory avaiability
        $new_subcat_slug = str_slug($request->subcategory_name);
        $check_subcat = Subcategory::where('subcategory_slug', $new_subcat_slug)->first();


        // Check Category avaiability
        $check_cat = Category::where('category_slug', $new_subcat_slug)->first();
        

        if ($check_cat) {
            Session::flash('noty-error', 'Requested name already exists as a Category !');
            return redirect()->route('subcategory');
        } else if ($check_subcat) {
            Session::flash('noty-warning', 'Subcategory already exists. Update denied.');
            return redirect()->route('subcategory');
        } else {
            $subcategory = Subcategory::find($id);
            $subcategory->category_slug = $request->category_slug;
            $subcategory->subcategory_name = $request->subcategory_name;
            $subcategory->subcategory_slug = str_slug($request->subcategory_name);
            $subcategory->save();

            Session::flash('noty-info', 'Subcategory Updated Successfully !');
            return redirect()->route('subcategory');
        }
    }
}
