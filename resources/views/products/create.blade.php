<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
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
    </div>
</header>
    <main>
      <div class="container">
        <form action="{{ route('products.store') }}" method="POST">
          @csrf
        <div class="style_form item_photo" >出品画像</div>
            <div class="photo_space">
              <br>
              <img src="{{asset('asset/img/baseline_add_a_photo_black_18dp.png')}}" alt="">
              <br>
              <p>アップロードするファイルを選択して下さい。</p>

            </div>
            <form action="#">

              <p><input type="file" name="s_file"></p>
              </form>

        <div class="style_form item_category">カテゴリー</div>
          <div class="selectbox">
            <select name="カテゴリー" >
                <option value="ladies">選択してください</option>
                <option value="ladies">レディ―ス</option>
                <option value="ladies">メンズ</option>
                <option value="ladies">その他</option>
            </select>
          </div>
        <div class="style_form item_text">商品説明</div>
        <div class="selectbox">
        <textarea class="style_textarea" name="description" rows="7" placeholder="商品の説明（必須 1,000文字以内）
        （色、素材、重さ、定価、注意点など）
                  "></textarea>
        </div>
        <div class="style_form">販売価格</div>
        <div class="selectbox">
            <input class="item_price" type="number" name="price" placeholder="0"  >
            <span>円</span>
        </div>
        <div class="style_form">
          <button class="btn-primary" type="submit" onclick="location.href='../myitems_index'">出品する</button>
        </div>
      </form>
      </div>
    </main>
</body>
</html>
