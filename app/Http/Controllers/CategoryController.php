<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('product.category', ['categories' => $categories]);
    }


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    $categories = new Category;
    $categories -> categories = $request->category;
    $categories->save();
    //リダイレクト処理
    return redirect()->route('products.index');
}

}