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
  <header>
    <div class="header">
      <h1>Throw it</h1>
    </div>
  </header>
  <main>
    {{-- １つのカテゴリ --}}
    <div class="categorys">
      @foreach ($categories as $category)
      <div class="category">
        <div class="category_header">
            <h1>{{ $category->name }}</h1>
            <a href="#" class="show_more">Show more ></a>
        </div>
        <div class="category_border"></div>
        {{-- カテゴリ内の商品をいくつか表示 --}}
        <div class="category_main">
          {{-- @for ($i = 0; $i < 5; $i++) --}}
          <a href="#" class="product">
            <div class="category_items">
              <div class="category_img">
                {{-- <img src="{{ $product->image }}" alt="products_img"> --}}
              </div>
              <div class="category_text">
                {{-- <p>{{ $product->description }}</p> --}}
                {{-- <span>{{ $product->price }}</span> --}}
              </div>
            </div>
          </a>
          {{-- @endfor --}}
        </div>
      </div>
      @endforeach

    </div>
  </main>
  <footer>

  </footer>
</body>
</html>
