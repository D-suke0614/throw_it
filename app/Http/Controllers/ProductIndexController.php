<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductIndexController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('product.products', ['products' => $products]);
    }
}
