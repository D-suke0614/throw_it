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
          <a href="#" class="product">
            <div class="category_items">
              <div class="category_img">
                <img src="" alt="products_img">
              </div>
              <div class="category_text">
                <p>商品名orDescription</p>
                <span>¥1000</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach

    </div>
  </main>
  <footer>

  </footer>
</body>
</html>
