<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('product.category', ['products' => $products]);
    }
}
