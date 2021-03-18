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
  <header>
    <div class="header">
      <h1>Throw it</h1>
    </div>
  </header>
  <main>
    <div class="product">
      <div class="product_name">
        <h2>商品名</h2>
      </div>
      <div class="product_img">
        <img src="{{ asset('assets/img/example.jpg') }}" alt="product_img">
      </div>
      <div class="product_detail">
          <table border="1">
            <tr align="left">
              <th class="detail detail_category">出品者</th>
              <th class="detail">name</th>
            </tr>
            <tr align="left">
              <th class="detail detail_category">カテゴリー</th>
              <th class="detail">category</th>
            </tr>
            <tr align="left">
              <th class="detail detail_category">サイズ</th>
              <th class="detail">size</th>
            </tr>
            <tr align="left">
              <th class="detail detail_category">商品の状態</th>
              <th class="detail">state</th>
            </tr>
          </table>
      </div>
      <div class="product_description">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed suscipit quas harum earum repudiandae tempore, placeat dignissimos animi unde, provident aut laborum ea delectus alias autem, dolor amet! Iusto, earum.
        </p>
      </div>
      <div class="product_buy">
        <h2>¥12,000</h2>
        <div class="buy_btn">
          <a href="#">購入に進む</a>
        </div>
      </div>
      <div class="product_comment">
        <div class="comment_img">
          <img src="{{ asset('assets/img/example.jpg') }}" alt="icon">
        </div>
        <div class="comment_main">
          <div class="comment_name">Daisuke</div>
          <div class="comment_contents">
            <div class="comment_text">商品の値下げをお願いします。</div>
            <div class="comment_date">2021/3/15</div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>

  </footer>
</body>
</html>
