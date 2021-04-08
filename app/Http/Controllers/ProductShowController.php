<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
// use App\Category;
// use App\Profile;
use App\Comment;

class ProductShowController extends Controller
{
    //
    public function show($id)
    {
        $product = Product::find($id);
        $comments = Comment::all();
        return view('product.product', ['product' => $product], ['comments' => $comments]);
    }
}
