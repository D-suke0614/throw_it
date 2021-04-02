<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
  <title>Document</title>
</head>
<body>
  <header class="header">
    <h1 class="throw_it">
      throw_it
    </h1>
    <div class="header_links">
      <a href="{{ route('categories.index') }}" class="header_link">
        カテゴリー一覧 >
      </a>
      <a href="{{ route('products.myitems') }}" class="header_link">
        マイページ >
      </a>
      <a href="{{ route('products.create') }}" class="header_link">
        商品を出品する >
      </a>
    </div>
  </header>

  <main>
    @foreach($products as $product)
    <a href="{{ route('products.show', $product->id) }}" class="products_link">
      <div class="products">
        <div class="products_img">
          <img src="{{ $product->image }}" alt="products_img">
          <span>
            ¥{{ $product->price }}
          </span>
        </div>
        <div class="products_name">
          <h2>
            {{ $product->name }}
          </h2>
        </div>
      </div>
    </a>
    @endforeach
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
