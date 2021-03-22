<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('myitems_index',['products'=>$products]);
        
    }
    public function store(Request $request)
    {
        $product = new Product;
        //左辺がDB          右辺がフォームの中身（name属性）    プロパティとして取り出している
        $product -> name = $request->name;
        $product -> image = $request->image;
        $product -> price = $request->price;
        $product -> description = $request->description;

        $product->save();
        //リダイレクト処理
        return redirect()->route('products.index');

    }
    public function show($id)
   {   //送られてきたidでDB検索、該当のデータを抽出
            $product = Product::find($id);
            // dd($id);
            return view('products.show' , ['product'=>$product]);
    }
}