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

Route::view('/','index')->name('index');
Route::post('/login/post','AuthController@loginPost')->name('loginPost');
Route::get('/logout','AuthController@logout')->name('logout');
Route::view('/daftar','daftar')->name('daftar');
Route::post('/daftar/post','AuthController@daftarPost')->name('daftarPost');
Route::group(['middleware' => ['auth','CheckRole:Customer']],function(){
	// SALES ORDER
	Route::get('/sales/order','SalesOrderController@salesOrder')->name('salesOrder');
	Route::get('/sales/order/create','SalesOrderController@salesOrderCreate')->name('salesOrderCreate');
	Route::post('/sales/order/create/post','SalesOrderController@salesOrderCreatePost')->name('salesOrderCreatePost');
	Route::get('/sales/order/confirm','SalesOrderController@salesOrderConfirm')->name('salesOrderConfirm');
	Route::get('/sales/order/delete/{id}','SalesOrderController@salesOrderDetailDelete')->name('salesOrderDetailDelete');

});

Route::group(['middleware' => ['auth','CheckRole:Admin,Customer']],function(){
	Route::get('/dashboard','BackController@dashboard')->name('dashboard');

});
Route::group(['middleware ' => ['auth','CheckRole:Admin']],function(){
	// PRODUK
	Route::get('/product','ProductController@product')->name('product');
	Route::get('/product/create','ProductController@productCreate')->name('productCreate');
	Route::post('/product/create/post','ProductController@productCreatePost')->name('productCreatePost');
	Route::get('/product/edit/{id}','ProductController@productEdit')->name('productEdit');
	Route::post('/product/edit/{id}/post','ProductController@productEditPost')->name('productEditPost');
	Route::get('/product/delete/{id}','ProductController@productDelete')->name('productDelete');
	// CUSTOMER 
	Route::get('/customer','CustomerController@customer')->name('customer');
	Route::get('/customer/create','CustomerController@customerCreate')->name('customerCreate');
	Route::post('/customer/create/post','CustomerController@customerCreatePost')->name('customerCreatePost');
	Route::get('/customer/edit/{id}','CustomerController@customerEdit')->name('customerEdit');
	Route::post('/customer/edit/{id}/post','CustomerController@customerEditPost')->name('customerEditPost');
	Route::get('/customer/delete/{id}','CustomerController@customerDelete')->name('customerDelete');
	// USER
	Route::get('/user','UserController@user')->name('user');
	Route::get('/user/create','UserController@userCreate')->name('userCreate');
	Route::post('/user/create/post','UserController@userCreatePost')->name('userCreatePost');
	Route::get('/user/edit/{id}','UserController@userEdit')->name('userEdit');
	Route::post('/user/edit/{id}/post','UserController@userEditPost')->name('userEditPost');
	Route::get('/user/delete/{id}','UserController@userDelete')->name('userDelete');
});