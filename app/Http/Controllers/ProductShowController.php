<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Profile;

class ProductShowController extends Controller
{
    //
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.product', ['product' => $product]);
    }
}
