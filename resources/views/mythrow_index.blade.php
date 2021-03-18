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
        <h1>MyPage</h1>
    {{-- プロフィール？？ --}}
    {{-- いいね商品一覧 --}}
      <div class="throw_items">
        <?php foreach ($items as $item): ?>
        <div class="throw_items"> 
            {{-- <img src=" echo 商品個別ページ写真？ " alt="カテゴリー"> --}}
            {{-- <div class="items_name"><?php echo 商品個別ページ カテゴリ?></div> --}}
            {{-- <div class="price"><?php echo 商品個別ページ price ?></div> --}}
        </div>
         @endforeach 
      </div>
      </div>
    </main>

</body>
</html>