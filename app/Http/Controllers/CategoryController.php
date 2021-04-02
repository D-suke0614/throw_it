<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

use App\Product;


class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();

        $products = Product::all();
        return view('product.category', ['categories' => $categories], ['products' => $products]);
    }
}

