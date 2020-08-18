<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product-details');
});

/*Route::get('/join-us', [
    'uses' => 'TestController@demu',
	'as'   => 'user.login'
]);*/

Route::post('/logincu', [
    'uses' => 'TestController@custom',
	'as'   => 'user.logincu'
]);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logout')->name('user.logout');


Route::prefix('/admin')->group(function(){

	Route::get('/', [
	    'uses' => 'AdminController@index',
		'as'   => 'admin.dashboard'
	]);

	Route::get('/login', [
	    'uses' => 'Auth\AdminLoginController@showLoginForm',
		'as'   => 'admin.login'
	]);

	Route::post('/login', [
	    'uses' => 'Auth\AdminLoginController@login',
		'as'   => 'admin.login.submit'
	]);

	Route::get('/logout', [
		'uses' => 'Auth\AdminLoginController@logout',
		'as'   => 'admin.logout'
	]);

	
	// Password reset routes
	  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

	
	// ADMIN Tools

	  // CATEGORY
	  Route::get('/categories', 'Category\CategoryController@category')->name('category'); 
	  Route::get('/jsoncategories', 'Category\CategoryController@jsoncategory')->name('jsoncategory'); 
	  Route::post('/category/store', 'Category\CategoryController@store')->name('category.store');
	  Route::delete('/category/delete/{id}', 'Category\CategoryController@destroy')->name('category.destroy'); 
	  Route::post('/category/edit/{id}', 'Category\CategoryController@update')->name('category.update'); 

	  // SUBCATEGORY
	  Route::get('/subcategories', 'Category\SubcategoryController@subcategory')->name('subcategory'); 
	  Route::post('/subcategory/store', 'Category\SubcategoryController@store')->name('subcategory.store');
	  Route::delete('/subcategory/delete/{id}', 'Category\SubcategoryController@destroy')->name('subcategory.destroy'); 
	  Route::post('/subcategory/edit/{id}', 'Category\SubcategoryController@update')->name('subcategory.update'); 

	 // CHILD SUBCATEGORY
	  Route::get('/childsubcategories', 'Category\ChildSubcategoryController@childsubcategory')->name('childsubcategory');  
	  Route::post('/childsubcategory/store', 'Category\ChildSubcategoryController@store')->name('childsubcategory.store');
	  Route::delete('/childsubcategory/delete/{id}', 'Category\ChildSubcategoryController@destroy')->name('childsubcategory.destroy');
	  Route::post('/childsubcategory/edit/{id}', 'Category\ChildSubcategoryController@update')->name('childsubcategory.update'); 

	// COUPONS
	  Route::get('/coupons', 'Coupon\CouponController@coupon')->name('coupon');
	  Route::post('/coupon/store', 'Coupon\CouponController@store')->name('coupon.store');
	  Route::delete('/coupon/delete/{id}', 'Coupon\CouponController@destroy')->name('coupon.destroy');
	  Route::post('/coupon/edit/{id}', 'Coupon\CouponController@update')->name('coupon.update'); 

	// SITE SETTINGS
	  // HEADER
	  Route::get('/menu-settings', 'Site\MenuController@menu')->name('menusettings');
	  Route::post('/menu-settings/edit/{id}', 'Site\MenuController@update')->name('menusettings.update');

	  // BODY
	  Route::get('/body-settings', 'Site\BodyController@body')->name('bodysettings');
	  Route::post('/body-settings/edit/{id}', 'Site\BodyController@update')->name('bodysettings.update');

	  // FOOTER
	  Route::get('/footer-settings', 'Site\FooterController@footer')->name('footersettings');

	  // SOCIAL
	  Route::get('/social-settings', 'Site\SocialController@social')->name('socialsettings');
	  Route::post('/social-settings/edit/{id}', 'Site\SocialController@update')->name('socialsettings.update');
	  Route::get('/social-settings/status-switcher/{id}', 'Site\SocialController@change_status')->name('socialsettings.change.status');

});