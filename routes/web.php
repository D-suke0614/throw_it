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

Route::get('/product', function () {
    return view('product.product');
});

Route::get('/products', function () {
    return view('product.products');
});

Route::get('/login', function () {
    return view('login');
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

// Route::resource('categories', 'CategoryController');
Route::get('/categories', 'CategoryController@index')->name('categories.index');

// Route::get('/categories', 'ProductController@index')->name('products.index');
