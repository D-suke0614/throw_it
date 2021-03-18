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
      <div class="category">
        <div class="category_header">
            <h1>カテゴリ名</h1>
            <a href="#" class="show_more">Show more ></a>
        </div>
        {{-- カテゴリ内の商品をいくつか表示 --}}
        <div class="category_main">
          <a href="#" class="test">
            <div class="category_items">
              <div class="category_img">
                <img src="" alt="">
              </div>
              <div class="category_text">
                <p>商品説明</p>
                <span>値段</span>
              </div>
            </div>
          </a>
        </div>
      </div>


      <div class="category">
        <div class="category_header">
            <h1>カテゴリ名</h1>
            <a href="#" class="show_more">Show more ></a>
        </div>
        {{-- カテゴリ内の商品をいくつか表示 --}}
        <div class="category_main">
          <a href="#" class="test">
            <div class="category_items">
              <div class="category_img">
                <img src="" alt="">
              </div>
              <div class="category_text">
                <p>商品説明</p>
                <span>値段</span>
              </div>
            </div>
          </a>
        </div>
      </div>


    </div>
  </main>
  <footer>

  </footer>
</body>
</html>
