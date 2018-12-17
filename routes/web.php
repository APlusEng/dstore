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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
	return view('layouts.master');
});

// Route for Product
Route::get('product', function(){
	return view('pages.product');
});
Route::get('product-detail', function(){
	return view('pages.product-detail');
});

Route::get('about', function(){
	return view('pages.about');
});
Route::get('blog-detail', function(){
	return view('pages.blog-detail');
});
Route::get('blog', function(){
	return view('pages.blog');
});
Route::get('contact', function(){
	return view('pages.contact');
});

// Route for cart
Route::get('shopping-cart', function(){
	return view('pages.shopping');
});
Route::get('cart', function(){
	return view('pages.cart');
});

// route for admin
Route::get('admin/dashboard', function(){
	return view('layouts.admin.dashboard');
});

// route for category
Route::get('admin/category', 'CategoryController@index')->name('category.index');
Route::get('admin/category/create', 'CategoryController@create')->name('category.create');
Route::post('admin/category/store', 'CategoryController@store')->name('category.store');
Route::get('admin/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::put('admin/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::delete('admin/category/delete/{id}', 'CategoryController@destroy')->name('category.destroy');

// route for product
Route::get('admin/product/create', 'ProductController@create');