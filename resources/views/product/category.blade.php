<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Category</title>
  <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
</head>
<body>
  <header class="header">
    <h1 class="throw_it">
      throw_it
    </h1>
    <div class="header_links">
      <a href="{{ route('products.myitems') }}" class="header_link">
        マイページ >
      </a>
      <a href="{{ route('products.create') }}" class="header_link">
        商品を出品する >
      </a>
    </div>
  </header>
  <main>
    {{-- １つのカテゴリ --}}
    <div class="categorys">
      @foreach ($categories as $category)
      <div class="category">
        <div class="category_header">
            <h1>{{ $category->name }}</h1>
            {{-- <a href="{{ route('products.index') }}" class="show_more">Show more ></a> --}}
            <a href="{{ route('products.index', $category->id) }}" class="show_more">Show more ></a>
        </div>
        <div class="category_border"></div>
        {{-- カテゴリ内の商品をいくつか表示 --}}
        <div class="category_main">
          @foreach($products as $product)
          @if ($product->category_id==$category->id)
          {{-- @for ($i=0;$i<4;$i++) --}}
          <div class="category_items">
            <a href="{{ route('products.show', $product->id) }}" class="product">
              <div class="category_img">
                <img src="#" alt="products_img">
              </div>
              <div class="category_text">
                <p>{{ $product->name }}</p>
                <span>¥{{ $product->price }}</span>
              </div>
            </a>
          </div>


          {{-- @endfor --}}
          @endif
          @endforeach
        </div>
      </div>
      @endforeach

    </div>
  </main>
  <footer>
    <div class="footer">
      <p class="footer_text">
        © 2021 - Throw it All Rights Reserved.
      </p>
    </div>
  </footer>
</body>
</html>
