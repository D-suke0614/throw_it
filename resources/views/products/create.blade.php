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
    <header class="logo_header">
        <div class="logo">
        throw_it
        </div>
    </header>
    <main>
      <div class="container">
        <form action="{{ route('products.store') }}" method="POST">
          @csrf 
        <div class="style_form item_photo" >出品画像</div>
        <div id="upFileWrap">
          <div id="inputFile">
              <!-- ドラッグ&ドロップエリア -->
              <p id="dropArea">ここにファイルをドロップしてください<br>または</p>
              <div id="inputFileWrap">
                  <input type="file" name="uploadFile" id="uploadFile" accept="image/*">
                  <div id="btnInputFile"><span>ファイルを選択する</span></div>
                  <div id="btnChangeFile"><span>ファイルを変更する</span></div>
              </div>
          </div>
      </div>

        <div class="style_form item_category">カテゴリー</div>
          <div class="selectbox">
            <select name="カテゴリー" >
                <option value="categories">選択してください</option>
                <option value="item"></option>
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