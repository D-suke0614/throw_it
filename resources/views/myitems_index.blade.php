<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>

        <h1 class="mypage_logo ">MyPage</h1>
    {{-- プロフィール？？ --}}
     <section class="mypage_user_icon">

    <div class="container"><img src="<?php echo $profile->photo ?>" alt="">
    <?php echo プロフィール->nickname ?>
    <ul>
        <li class="r_p">評価<?php echo $profile->rateing ?></li>
        <li class="r_p">残高<?php echo $balance->balance ?></li>
    </ul>
    </div>
    </header>
    <main>
        <ul class="tab">
            <li>throwした商品</li>
            <li>出品している商品</li>
        </ul>
    </section>
    {{-- 出品商品一覧 --}}
        <div class="product_items">
        
          <?php foreach ($items as $item): ?>
            <div class="product_item"> 
            {{-- <img src=" echo 商品個別ページ写真？ " alt="カテゴリー"> --}}
            {{-- <div class="items_name"><?php echo 商品個別ページ カテゴリ?></div> --}}
            {{-- <div class="price"><?php echo 商品個別ページ price ?></div> --}}
            </div>
        <?php endforeach ?>
        </div>
    </main>
</body>
</html>