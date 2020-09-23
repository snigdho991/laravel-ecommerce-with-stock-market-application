<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Subcategory;
use App\ChildSubcategory;
use App\ProductsAttribute;
use App\FollowingProduct;
use App\PortfolioProduct;
use App\Ask;

use Auth;
use DB;
use Session;

class FrontendProductController extends Controller
{
	public function frontend_single_product($slug)
	{
        $procount = Product::where(['product_slug' => $slug, 'status' => 1])->count();
        if ($procount == 0) {
            abort(404);
        }

		$product = Product::with(['category' => function($query){  
                    $query->select('id', 'category_name');
                }, 'subcategory' => function($query){
                    $query->select('id', 'subcategory_name');
                }, 'childsubcategory' => function($query){
                    $query->select('id', 'childsubcategory_name');
                }])->where('products.product_slug', $slug)->first();

		$product->views += 1;
		$product->save();

    	$productattr = Product::with('attributes')->where('product_slug', $slug)->first();
        /*dd($productattr);*/

        if (!empty($_GET['size'])) {
            if($_GET['action'] == 'buy-bid'){
                $size = $_GET['size'];
                $probuy_attr = ProductsAttribute::where(['product_id' => $product->id, 'size' => $size])->first();

                $lowest_ask = Ask::where(['product_id' => $product->id, 'size' => $size, 'status' => 1])->orderBy('ask_amount', 'asc')->take(1)->get()->first();

                return view('buy-bid')->with('product', $product)->with('productattr', $productattr)->with('probuy_attr', $probuy_attr)->with('lowest_ask', $lowest_ask);
            } else if($_GET['action'] == 'sell-ask') {
                $size = $_GET['size'];
                $probuy_attr = ProductsAttribute::where(['product_id' => $product->id, 'size' => $size])->first();
                return view('sell-ask')->with('product', $product)->with('productattr', $productattr)->with('probuy_attr', $probuy_attr);
            }
        }

    	return view('product-details')->with('product', $product)->with('productattr', $productattr);
	}

	public function category_wise_subcategory($category_slug)
    {
        $cat = DB::table('subcategories')->where('category_slug', $category_slug)->get();
        return response()->json($cat);
    }

    public function subcategory_wise_childsubcategory($subcategory_slug)
    {
        $subcat = DB::table('child_subcategories')->where('subcategory_slug', $subcategory_slug)->get();
        return response()->json($subcat);
    }

    public function index()
    {
    	return view('index')->with('popular_products', Product::where('status', 1)->orderBy('views', 'desc')->take(6)->get());
    }

    public function follow_product($slug) {

        $userid = Auth::id();
        $check = FollowingProduct::where('user_id',$userid)->where('product_slug',$slug)->first();

        $particular_product = Product::where('product_slug', $slug)->first();
        
        if (Auth::check()) {
         
            if ($check) {

                return response()->json(['error' => 'Product has been followed already !']); 
                
            } else {

                $follow_pro = new FollowingProduct();
                $follow_pro->user_id      = $userid;
                $follow_pro->product_slug = $slug;
                $follow_pro->product_id   = $particular_product->id;
                $follow_pro->save();                
                
                return response()->json(['success' => 'You are following this product from now.']);
                
            }
                         
        } else {
            return response()->json(['error' => 'Please login first to follow this product !']);              
        } 
    }

    public function add_to_portfolio($slug) {

        $userid = Auth::id();
        $check =  PortfolioProduct::where('user_id',$userid)->where('product_slug',$slug)->first();

        $particular_product = Product::where('product_slug', $slug)->first();
        
        if (Auth::check()) {
         
            if ($check) {

                return response()->json(['error' => 'Product has been added to porfolio already !']); 
                
            } else {

                $portfolio_pro = new PortfolioProduct();
                $portfolio_pro->user_id      = $userid;
                $portfolio_pro->product_slug = $slug;
                $portfolio_pro->product_id   = $particular_product->id;
                $portfolio_pro->save();                
                
                return response()->json(['success' => 'Product has been added in your portfolio list.']);
                
            }
                         
        } else {
            return response()->json(['error' => 'Please login first to add this product in your portfolio !']);              
        } 
    }

    public function user_following_products()
    {
        $user = Auth::id();
        
        $product = DB::table('following_products')
                       ->join('products', 'following_products.product_id', 'products.id')
                       ->select('products.*', 'following_products.user_id', 'following_products.created_at')
                       ->where('following_products.user_id', $user)
                       ->get();

        return view('following-products')->with('followed_products', $product);
    }

    public function user_portfolio_products()
    {
        $user = Auth::id();
        
        $product = DB::table('portfolio_products')
                       ->join('products', 'portfolio_products.product_id', 'products.id')
                       ->select('products.*', 'portfolio_products.user_id', 'portfolio_products.created_at')
                       ->where('portfolio_products.user_id', $user)
                       ->get();

        return view('portfolio-products')->with('portfolio_products', $product);
    }

    public function get_product_attributes(Request $request)
    {
        $data = $request->all();
        /*echo "<pre>"; print_r($req); die;*/
        
        $product = Product::where('id', $request->product_id)->first();
        $product->views += 1;
        $product->save();

        $pro_attr = ProductsAttribute::where(['product_id' => $request->product_id, 'size' => $request->size])->first();
        return response()->json($pro_attr);
    }

}
