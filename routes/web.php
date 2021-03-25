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

Route::get('/myitems_index','ProductController@index') ;
// Route::get('/products/create','ProductContoroller@create')->name('products.create');

Route::resource('products','ProductController');
// Route::get('/products','ProductContoroller@index')->name('product.index') ;

Route::get('/product', function () {
    return view('product.product');
});

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


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductIndexController@index')->name('products.index');

// Route::get('/products', function () {
//     return view('product.products');
// });
