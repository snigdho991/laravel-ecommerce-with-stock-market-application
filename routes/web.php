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
	  Route::get('/categories', 'Category\CategoryController@category')->name('category'); 
	  Route::post('/category/store', 'Category\CategoryController@store')->name('category.store'); 
});