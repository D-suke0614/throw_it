<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
  <title>Product</title>
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
    <div class="product">
      <div class="product_name">
        <h2>{{ $product->name }}</h2>
      </div>
      <div class="product_img">
        <img src="{{ $product->image }}" alt="product_img">
      </div>
      <div class="product_detail">
          <table border="1">
            <tr align="left">
              <th class="detail detail_category">出品者</th>
              <th class="detail">{{ $product->profile->nickname }}</th>
            </tr>
            <tr align="left">
              <th class="detail detail_category">カテゴリー</th>
              <th class="detail">{{ $product->category->name }}</th>
            </tr>
            <tr align="left">
              <th class="detail detail_category">サイズ</th>
              <th class="detail">DBの設計</th>
            </tr>
            <tr align="left">
              <th class="detail detail_category">商品の状態</th>
              <th class="detail">忘れてました。。。🥺</th>
            </tr>
          </table>
      </div>
      <div class="product_description">
        <p>
          {{ $product->description }}
        </p>
      </div>
      <div class="product_buy">
        <h2>¥{{ $product->price }}</h2>
        <div class="buy_btn">
          <a href="#">購入に進む</a>
        </div>
      </div>
      @foreach ($comments as $comment)
      @if($comment->product_id==$product->id)
      <div class="product_comment">
        <div class="comment_img">
          <img src="{{ asset('assets/img/example.jpg') }}" alt="icon">
        </div>
        <div class="comment_main">
          <div class="comment_name">{{ $comment->profile->nickname }}</div>
          <div class="comment_contents">
            <div class="comment_text">{{ $comment->comment }}</div>
            <div class="comment_date">{{ $comment->updated_at }}</div>
          </div>
        </div>
      </div>
      @endif
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
