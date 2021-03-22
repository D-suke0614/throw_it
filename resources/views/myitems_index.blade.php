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
            <section >  
                <div class="prf_icn">
                  <img class="prf" src="{{asset('asset/img/monster.jpg')}}" alt="">
                    <div>ニックネーム</div>
                    <ul>
                        <li>評価</li>
                        <li>残高</li>
                    </ul>
        </div> 
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

    </main>
</body>
</html>