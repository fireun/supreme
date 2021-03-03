<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/insertProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::get('/insertCategory',[
    'uses'=>'CategoryController@create',
    'as'=>'category'
]);

Route::post('/insertCategory/store',[  
    'uses'=>'CategoryController@store',
    'as'=>'insertCategory.store'   
]);

Route::post('/addProduct/store',[ 
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'  
]);

Route::get('/allproduct',[
    'uses'=>'ProductController@show',
    'as'=>'all.product'
]);

Route::get('/allproduct/delete/{id}',[
    'uses'=>'ProductController@delete',
    'as'=>'delete.product'
]);

Route::get('/editproduct/{id}',[
    'uses'=>'ProductController@edit',
    'as'=>'edit.product'
]);

Route::post('/updateproduct',[
    'uses'=>'ProductController@update',
    'as'=>'update.product'  
]);

Route::post('/searchproduct',[
    'uses'=>'productShow@search',
    'as'=>'search.product'  
]);

Route::post('/searchcategory',[
    'uses'=>'productShow@searchCategory',
    'as'=>'search.category'  
]);

Route::get('/products',[
    'uses'=>'productShow@showProduct',
    'as'=>'products'  
]);

Route::get('/productDetail/{id}',[
    'uses'=>'productShow@productDetail',
    'as'=>'productdetail.product'
]);

Route::get('/categories',[
    'uses'=>'productShow@showCategory',
    'as'=>'categories'  
]);

Route::get('/categoryProduct/{id}',[
    'uses'=>'productShow@categoryProduct',
    'as'=>'categoryproduct.category'
]);

Route::get('/allcategory',[
    'uses'=>'CategoryController@show',
    'as'=>'all.category'
]);

Route::get('/allcategory/delete/{id}',[
    'uses'=>'CategoryController@delete',
    'as'=>'delete.category'
]);

Route::get('/editcategory/{id}',[
    'uses'=>'CategoryController@edit',
    'as'=>'edit.category'
]);

Route::post('/updatecategory',[
    'uses'=>'CategoryController@update',
    'as'=>'update.category'  
]);


Route::post('/searchcategory',[
    'uses'=>'productShow@searchCategory',
    'as'=>'search.category'  
]);

Route::post('/addToCart',[
    'uses'=>'CartController@add',
    'as'=>'add.to.cart'
]);

Route::get('/myCart',[
    'uses'=>'CartController@show', 
    'as'=>'my.cart'
]);

Route::get('/editCart/{id}',[
    'uses'=>'CartController@editCart',
    'as'=>'edit.cart'
]);

Route::post('/updateCart',[
    'uses'=>'CartController@updateCart',
    'as'=>'update.cart'  
]);

Route::get('/myCart/remove/{id}',[
    'uses'=>'CartController@removeCart',
    'as'=>'delete.cart'
]);

Route::post('/createorder',[
    'uses'=>'OrderController@add',
    'as'=>'create.order'
]);

Route::post('/shippingInformation',[
    'uses'=>'orderController@updateShipInfo',
    'as'=>'updateShip.order'  
]);

Route::get('/myorder',[
    'uses'=>'OrderController@show',
    'as'=>'my.order'
]);

Route::get('/vieworder',[
    'uses'=>'orderShow@viewOrder',
    'as'=>'all.order'
]);

Route::get('/orderDetail/{id}',[
    'uses'=>'orderShow@viewOrderDetail',
    'as'=>'orderDetail.order'
]);

Route::post('/updateStatus',[
    'uses'=>'orderShow@updateOrderStatus',
    'as'=>'updateStatus.order'  
]);

Route::get('/orderRecord',[
    'uses'=>'OrderController@showOrderProduct',
    'as'=>'check.order'
]);

Route::post('paypal', 'PaymentController@payWithpaypal');
Route::get('status/{id}', 'PaymentController@getPaymentStatus');

Auth::routes();

Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

