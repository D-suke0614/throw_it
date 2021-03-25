<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductShowController extends Controller
{
    //
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.product', ['product' => $product]);
    }
}
