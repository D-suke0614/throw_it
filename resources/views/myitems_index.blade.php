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
        <h1 class="mypage_top ">MyPage</h1>
    {{-- プロフィール？？ --}}
         <section >  
             {{-- class="mypage_user_icon" --}}
            <div class="prf_icn">
                <img class="prf" src="{{asset('asset/img/monster.jpg')}}" alt="">
            
            <ul>
                <li>評価</li>
                <li>残高</li>
            </ul>
        </div> 
    {{-- <div class="container"><img src="<?php echo $profile->photo ?>" alt="">
          <?php echo プロフィール->nickname; ?> --}}
    {{-- <ul>
        <li class="r_p">評価<?php echo $profile->rating; ?></li>
        <li class="r_p">残高<?php echo $balance->balance ?></li>
    </ul> --}}
    
    </section>
 
    <input id="throw" type="radio" name="tab_item" checked>
    <label class="tab_item" for="throw">throwした商品</label>
    <input id="sell_items" type="radio" name="tab_item">
    <label class="tab_item" for="sell_items">出品している商品</label>

    <div class="tab_content" id="throw_content">
        <div class="tab_content_description">
          <p class="c-txtsp">throwした商品がここに入ります</p>

        </div>
      </div>
      <div class="tab_content" id="sell_items_content">
        <div class="tab_content_description">
          <p class="c-txtsp">出品している商品がここに入ります</p>
        </div>
      </div>
   
    </div>
    {{-- 出品商品一覧 --}}
        <div class="product_items">
        
          {{-- <?php foreach ($items as $item): ?> --}}
            <div class="product_item"> 
            {{-- <img src=" echo 商品個別ページ写真？ " alt="カテゴリー"> --}}
            {{-- <div class="items_name"><?php echo 商品個別ページ カテゴリ?></div> --}}
            {{-- <div class="price"><?php echo 商品個別ページ price ?></div> --}}
            </div>
        {{-- <?php endforeach ?> --}}
        </div>
        </div></div>
    </main>
</body>
</html>