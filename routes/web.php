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


// Route::get('/category', function () {
//     return view('product.category');
// });

Route::get('/myitems_index','ProductController@index') ;
// Route::get('/products/create','ProductContoroller@create')->name('products.create');

Route::resource('products','ProductController');
// Route::get('/products','ProductContoroller@index')->name('product.index') ;

Route::get('/login', function () {
    return view('login');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/myitems_index', function () {
    return view('myitems_index');
});
Route::get('/sell_item', function () {
    return view('sell_item');
});

// カテゴリー一覧表示させる
Route::get('/categories', 'CategoryController@index')->name('categories.index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 商品一覧を表示させる
Route::get('/products', 'ProductIndexController@index')->name('products.index');

// 商品個別ページを表示
Route::get('/products/{product}', 'ProductShowController@show')->name('products.show');
