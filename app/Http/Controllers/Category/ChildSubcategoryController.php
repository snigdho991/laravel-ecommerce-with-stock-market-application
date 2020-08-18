<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Subcategory;
use App\ChildSubcategory;
use Session;


class ChildSubcategoryController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');
    }

    public function childsubcategory()
    {
    	$categories = Category::all();
    	$subcategories = Subcategory::all();
    	
    	$child_subcategories = DB::table('child_subcategories')
    					   ->join('subcategories', 'child_subcategories.subcategory_slug', 'subcategories.subcategory_slug')
    					   ->join('categories', 'child_subcategories.category_slug', 'categories.category_slug')
    					   ->select('child_subcategories.*', 'categories.category_slug', 'categories.category_name', 'subcategories.subcategory_slug', 'subcategories.subcategory_name')
    					   ->orderBy('categories.category_slug', 'desc')
    					   ->get();
    	
    	return view('admin.category.child-subcategory')->with('categories', $categories)
    										           ->with('subcategories', $subcategories)
    										           ->with('childsubcategories', $child_subcategories);
    }


    public function store(Request $request)
    {
    	$this->validate($request, [
            'childsubcategory_name' => 'required|max:255',
        ]);

    	// Check child subcategory avaiability
        $child_subcat_slug = str_slug($request->childsubcategory_name);
        $check_childsubcat = ChildSubcategory::where('childsubcategory_slug', $child_subcat_slug)->first();


        // Check subcategory avaiability
        $check_subcat = Subcategory::where('subcategory_slug', $child_subcat_slug)->first();


        // Check Category avaiability
        $check_cat = Category::where('category_slug', $child_subcat_slug)->first();
        

        if ($check_cat) {
        	Session::flash('noty-error', 'Requested name already exists as a Category !');
	        return redirect()->route('childsubcategory');
        } else if ($check_subcat) {
        	Session::flash('noty-error', 'Requested name already exists as a Subcategory !');
	        return redirect()->route('childsubcategory');
        } else if ($check_childsubcat) {
        	Session::flash('noty-error', 'Child Subcategory already exists. Try different one.');
	        return redirect()->route('childsubcategory');
	    } else {
	        $childsubcategory = new ChildSubcategory;
	        $childsubcategory->category_slug = $request->category_slug;
	        $childsubcategory->subcategory_slug = $request->subcategory_slug;
	        $childsubcategory->childsubcategory_name = $request->childsubcategory_name;
	        $childsubcategory->childsubcategory_slug = str_slug($request->childsubcategory_name);
	        $childsubcategory->save();

	        Session::flash('noty-success', 'Child Subcategory Added Successfully !');
	        return redirect()->route('childsubcategory');
	    }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'childsubcategory_name' => 'required|max:255',
        ]);

        // Check child subcategory avaiability
        $child_subcat_slug = str_slug($request->childsubcategory_name);
        $check_childsubcat = ChildSubcategory::where('childsubcategory_slug', $child_subcat_slug)->first();


        // Check subcategory avaiability
        $check_subcat = Subcategory::where('subcategory_slug', $child_subcat_slug)->first();


        // Check Category avaiability
        $check_cat = Category::where('category_slug', $child_subcat_slug)->first();
        

        if ($check_cat) {
            Session::flash('noty-error', 'Requested name already exists as a Category !');
            return redirect()->route('childsubcategory');
        } else if ($check_subcat) {
            Session::flash('noty-error', 'Requested name already exists as a Subcategory!');
            return redirect()->route('childsubcategory');
        } else if ($check_childsubcat) {
            Session::flash('noty-error', 'Child Subcategory already exists. Try different one.');
            return redirect()->route('childsubcategory');
        } else {
            $childsubcategory = ChildSubcategory::find($id);
            $childsubcategory->category_slug = $request->category_slug;
            $childsubcategory->subcategory_slug = $request->subcategory_slug;
            $childsubcategory->childsubcategory_name = $request->childsubcategory_name;
            $childsubcategory->childsubcategory_slug = str_slug($request->childsubcategory_name);
            $childsubcategory->save();

            Session::flash('noty-info', 'Child Subcategory Updated Successfully !');
            return redirect()->route('childsubcategory');
        }
    }

    public function destroy($id)
    {
        $childsubcategory = ChildSubcategory::findOrFail($id);
        $childsubcategory->delete();
    }
}
