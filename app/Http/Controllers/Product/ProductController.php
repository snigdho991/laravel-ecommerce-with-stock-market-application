<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;
use App\ChildSubcategory;
use App\ProductsAttribute;

use DB;
use Session;
use Image;

class ProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function products()
    {
    	$products = Product::with(['category' => function($query){  
    		$query->select('id', 'category_name');
    	}, 'subcategory' => function($query){
    		$query->select('id', 'subcategory_name');
    	}, 'childsubcategory' => function($query){
    		$query->select('id', 'childsubcategory_name');
    	}])->get();
    	
    	return view('admin.product.product')->with('products', $products);
    }

    public function update_product_status(Request $request)
    {
    	if ($request->ajax()) {
    		$product_id = $request->product_id;
    		$data = Product::find($product_id);

    		if ($data->status == 1) {
    			$data->status = 0;
    			$data->update();
    		} else {
    			$data->status = 1;
    			$data->update();
    		}

    		return response()->json(['status' => $data->status, 'product_id' => $product_id]);
    	}
    }

    public function add_product()
    {
        // Filter  Arrays

        $occasionArray = array('Casual', 'Formal');
        $categories = Category::all();

        return view('admin.product.add')->with('occasionArray', $occasionArray)->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name'  => 'required', /*|regex:/^[\pL\s\-]+$/u*/
            'product_code'  => 'required', /*|regex:/^[\w-]*$/*/
            'product_price' => 'required|numeric',
            'main_image'    => 'required',
            'category_slug' => 'required',
            'description'   => 'required',
        ]);

        // Check child subcategory avaiability
        $pro_slug = str_slug($request->product_name);
        $check_pro = Product::where('product_slug', $pro_slug)->first();

        if ($check_pro) {
            Session::flash('noty-error', 'Product already exists. Try different one.');
            return redirect()->route('add.product');
        } else {
            $product = new Product;
            $product->category_id          = $request->category_slug;
            $product->subcategory_id       = $request->subcategory_slug;
            $product->child_subcategory_id = $request->childsubcategory_slug;
            $product->product_name         = $request->product_name;
            $product->product_slug         = str_slug($request->product_name);
            $product->product_code         = $request->product_code;
            $product->product_price        = $request->product_price;
            $product->product_weight       = $request->product_weight;
            $product->product_discount     = $request->product_discount;
            $product->product_video        = $request->product_video;
            $product->meta_title           = $request->meta_title;
            $product->meta_keywords        = $request->meta_keywords;
            $product->meta_description     = $request->meta_description;
            $product->colorway             = $request->colorway;
            $product->occasion             = $request->occasion;
            $product->description          = $request->description;
            $product->status               = 1;

            if($request->hasFile('main_image')){
                $image_tmp = $request->file('main_image');
                if ($image_tmp->isValid()) {
                    $image_name = $image_tmp->getClientOriginalName();
                    $extension = $image_tmp->getClientOriginalExtension();
                    $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                    $original_image_path = 'app/uploads/product_images/main_image/large/'.$image_new_name;
                    $medium_image_path = 'app/uploads/product_images/main_image/medium/'.$image_new_name;
                    $small_image_path = 'app/uploads/product_images/main_image/small/'.$image_new_name;

                    Image::make($image_tmp)->save($original_image_path);
                    Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                    $product->main_image = $image_new_name;
                }
            }

            if($request->hasFile('second_image')){
                $image_tmp = $request->file('second_image');
                if ($image_tmp->isValid()) {
                    $image_name = $image_tmp->getClientOriginalName();
                    $extension = $image_tmp->getClientOriginalExtension();
                    $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                    $original_image_path = 'app/uploads/product_images/second_image/large/'.$image_new_name;
                    $medium_image_path = 'app/uploads/product_images/second_image/medium/'.$image_new_name;
                    $small_image_path = 'app/uploads/product_images/second_image/small/'.$image_new_name;

                    Image::make($image_tmp)->save($original_image_path);
                    Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                    $product->second_image = $image_new_name;
                }
            }

            if($request->hasFile('third_image')){
                $image_tmp = $request->file('third_image');
                if ($image_tmp->isValid()) {
                    $image_name = $image_tmp->getClientOriginalName();
                    $extension = $image_tmp->getClientOriginalExtension();
                    $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                    $original_image_path = 'app/uploads/product_images/third_image/large/'.$image_new_name;
                    $medium_image_path = 'app/uploads/product_images/third_image/medium/'.$image_new_name;
                    $small_image_path = 'app/uploads/product_images/third_image/small/'.$image_new_name;

                    Image::make($image_tmp)->save($original_image_path);
                    Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                    $product->third_image = $image_new_name;
                }
            }

            $product->save();

            Session::flash('noty-success', 'Product Inserted Successfully !');
            return redirect()->route('products');
        }
    }

    public function view_product($slug)
    {

        $product = Product::with(['category' => function($query){  
                        $query->select('id', 'category_name');
                    }, 'subcategory' => function($query){
                        $query->select('id', 'subcategory_name');
                    }, 'childsubcategory' => function($query){
                        $query->select('id', 'childsubcategory_name');
                    }])->where('products.product_slug', $slug)->first();
                    
        return view('admin.product.show')->with('product', $product);

    }

    public function add_attributes($slug)
    {

        $product = Product::with(['category' => function($query){  
                        $query->select('id', 'category_name');
                    }, 'subcategory' => function($query){
                        $query->select('id', 'subcategory_name');
                    }, 'childsubcategory' => function($query){
                        $query->select('id', 'childsubcategory_name');
                    }])->where('products.product_slug', $slug)->first();

        $productattr = Product::with('attributes')->where('product_slug', $slug)->first();
              
        return view('admin.product.addattributes')->with('product', $product)->with('productattr', $productattr);

    }

    public function store_attributes(Request $request, $id)
    {
        /*$this->validate($request, [
            'size.*'  => 'required',
            'sku.*'   => 'required',
            'stock.*' => 'required',
        ]);*/

        $data = $request->all();

        /*dd($data['size']);*/
        foreach ($data['sku'] as $key => $value) {
            if (!empty($value)) {

                // SKU already exists
                $attrCountsku = ProductsAttribute::where('sku', $value)->count();
                if ($attrCountsku > 0) {
                    Session::flash('noty-error', 'SKU already exists ! Try different one.');
                    return redirect()->back();
                }


                $attrCountsize = ProductsAttribute::where(['product_id' => $id, 'size' => $data['size'][$key]])->count();
                if ($attrCountsize > 0) {
                    Session::flash('noty-error', 'Size already exists ! Try different one.');
                    return redirect()->back();
                }


                $attribute = new ProductsAttribute();
                $attribute->product_id = $id;
                $attribute->sku = $value;
                $attribute->size = $data['size'][$key];
                $attribute->stock = $data['stock'][$key];
                $attribute->save();

            }
        }

        Session::flash('noty-success', 'Product Attributes Added Successfully !');
        return redirect()->back();

    }

    public function edit($slug)
    {
        $product = Product::with(['category' => function($query){  
                        $query->select('id', 'category_name');
                    }, 'subcategory' => function($query){
                        $query->select('id', 'subcategory_name');
                    }, 'childsubcategory' => function($query){
                        $query->select('id', 'childsubcategory_name');
                    }])->where('products.product_slug', $slug)->first();

        $occasionArray = array('Casual', 'Formal');

        $categories = Category::all();
        $subcategories = Subcategory::all();
        $childsubcategories = ChildSubcategory::all();

        return view('admin.product.edit')->with('product', $product)->with('occasionArray', $occasionArray)->with('categories', $categories)->with('subcategories', $subcategories)->with('childsubcategories', $childsubcategories);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'product_name'  => 'required',
            'product_code'  => 'required',
            'product_price' => 'required|numeric',
            'category_slug' => 'required',
            'description'   => 'required',
        ]);

        // Check avaiability
        $pro_slug = str_slug($request->product_name);
        $check_pro = Product::where('product_slug', $pro_slug)->first();

        $product = Product::find($id);
        
        if($product->product_slug != $pro_slug){
            if ($check_pro) {
                Session::flash('noty-error', 'Product already exists. Update denied !');
                return redirect()->route('product.edit', ['slug' => $product->product_slug]);
            } else {                
                $product->category_id          = $request->category_slug;
                $product->subcategory_id       = $request->subcategory_slug;
                $product->child_subcategory_id = $request->childsubcategory_slug;
                $product->product_name         = $request->product_name;
                $product->product_slug         = str_slug($request->product_name);
                $product->product_code         = $request->product_code;
                $product->product_price        = $request->product_price;
                $product->product_weight       = $request->product_weight;
                $product->product_discount     = $request->product_discount;
                $product->product_video        = $request->product_video;
                $product->meta_title           = $request->meta_title;
                $product->meta_keywords        = $request->meta_keywords;
                $product->meta_description     = $request->meta_description;
                $product->colorway             = $request->colorway;
                $product->occasion             = $request->occasion;
                $product->description          = $request->description;
                $product->status               = 1;

                if($request->hasFile('main_image')){
                    $image_tmp = $request->file('main_image');
                    if ($image_tmp->isValid()) {
                        $image_name = $image_tmp->getClientOriginalName();
                        $extension = $image_tmp->getClientOriginalExtension();
                        $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                        $original_image_path = 'app/uploads/product_images/main_image/large/'.$image_new_name;
                        $medium_image_path = 'app/uploads/product_images/main_image/medium/'.$image_new_name;
                        $small_image_path = 'app/uploads/product_images/main_image/small/'.$image_new_name;

                        Image::make($image_tmp)->save($original_image_path);
                        Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                        $product->main_image = $image_new_name;
                    }
                }

                if($request->hasFile('second_image')){
                    $image_tmp = $request->file('second_image');
                    if ($image_tmp->isValid()) {
                        $image_name = $image_tmp->getClientOriginalName();
                        $extension = $image_tmp->getClientOriginalExtension();
                        $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                        $original_image_path = 'app/uploads/product_images/second_image/large/'.$image_new_name;
                        $medium_image_path = 'app/uploads/product_images/second_image/medium/'.$image_new_name;
                        $small_image_path = 'app/uploads/product_images/second_image/small/'.$image_new_name;

                        Image::make($image_tmp)->save($original_image_path);
                        Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                        $product->second_image = $image_new_name;
                    }
                }

                if($request->hasFile('third_image')){
                    $image_tmp = $request->file('third_image');
                    if ($image_tmp->isValid()) {
                        $image_name = $image_tmp->getClientOriginalName();
                        $extension = $image_tmp->getClientOriginalExtension();
                        $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                        $original_image_path = 'app/uploads/product_images/third_image/large/'.$image_new_name;
                        $medium_image_path = 'app/uploads/product_images/third_image/medium/'.$image_new_name;
                        $small_image_path = 'app/uploads/product_images/third_image/small/'.$image_new_name;

                        Image::make($image_tmp)->save($original_image_path);
                        Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                        $product->third_image = $image_new_name;
                    }
                }

                $product->save();

                Session::flash('noty-info', 'Product Updated Successfully !');
                return redirect()->route('product.edit', ['slug' => $pro_slug]);
            }
        } else {
                
                $product->category_id          = $request->category_slug;
                $product->subcategory_id       = $request->subcategory_slug;
                $product->child_subcategory_id = $request->childsubcategory_slug;
                $product->product_name         = $request->product_name;
                $product->product_slug         = str_slug($request->product_name);
                $product->product_code         = $request->product_code;
                $product->product_price        = $request->product_price;
                $product->product_weight       = $request->product_weight;
                $product->product_discount     = $request->product_discount;
                $product->product_video        = $request->product_video;
                $product->meta_title           = $request->meta_title;
                $product->meta_keywords        = $request->meta_keywords;
                $product->meta_description     = $request->meta_description;
                $product->colorway             = $request->colorway;
                $product->occasion             = $request->occasion;
                $product->description          = $request->description;
                $product->status               = 1;

                if($request->hasFile('main_image')){
                    $image_tmp = $request->file('main_image');
                    if ($image_tmp->isValid()) {
                        $image_name = $image_tmp->getClientOriginalName();
                        $extension = $image_tmp->getClientOriginalExtension();
                        $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                        $original_image_path = 'app/uploads/product_images/main_image/large/'.$image_new_name;
                        $medium_image_path = 'app/uploads/product_images/main_image/medium/'.$image_new_name;
                        $small_image_path = 'app/uploads/product_images/main_image/small/'.$image_new_name;

                        Image::make($image_tmp)->save($original_image_path);
                        Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                        $product->main_image = $image_new_name;
                    }
                }

                if($request->hasFile('second_image')){
                    $image_tmp = $request->file('second_image');
                    if ($image_tmp->isValid()) {
                        $image_name = $image_tmp->getClientOriginalName();
                        $extension = $image_tmp->getClientOriginalExtension();
                        $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                        $original_image_path = 'app/uploads/product_images/second_image/large/'.$image_new_name;
                        $medium_image_path = 'app/uploads/product_images/second_image/medium/'.$image_new_name;
                        $small_image_path = 'app/uploads/product_images/second_image/small/'.$image_new_name;

                        Image::make($image_tmp)->save($original_image_path);
                        Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                        $product->second_image = $image_new_name;
                    }
                }

                if($request->hasFile('third_image')){
                    $image_tmp = $request->file('third_image');
                    if ($image_tmp->isValid()) {
                        $image_name = $image_tmp->getClientOriginalName();
                        $extension = $image_tmp->getClientOriginalExtension();
                        $image_new_name = $image_name.'-'.rand(111,99999).'.'.$extension;

                        $original_image_path = 'app/uploads/product_images/third_image/large/'.$image_new_name;
                        $medium_image_path = 'app/uploads/product_images/third_image/medium/'.$image_new_name;
                        $small_image_path = 'app/uploads/product_images/third_image/small/'.$image_new_name;

                        Image::make($image_tmp)->save($original_image_path);
                        Image::make($image_tmp)->resize(520,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(260,300)->save($small_image_path);

                        $product->third_image = $image_new_name;
                    }
                }

                $product->save();

                Session::flash('noty-info', 'Name unchanged but product Updated Successfully !');
                return redirect()->route('product.edit', ['slug' => $pro_slug]);
        }
        
    }

    public function destroy($id)
    {
        $produ = Product::findOrFail($id);
        $produ->delete();
    }

    public function attribute_destroy($id)
    {
        $proattr = ProductsAttribute::findOrFail($id);
        $proattr->delete();
    }

}
