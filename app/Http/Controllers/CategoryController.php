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

        $products = Product::orderBy('category_id', 'asc')->get();
        // $products = Product::all();
        // dd($products);

        return view('product.category', ['categories' => $categories], ['products' => $products]);
    }
}

