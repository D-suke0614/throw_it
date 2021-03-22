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
    <main>
      <div class="card-body">
          {{-- <div class="card-image"> {{ $product->image }}</div> --}}
          {{-- <p class="card-text">カテゴリー：{{ $product->category }}</p> --}}
      
          <p class="card-text">
            商品説明 : {{ optional($product)->description }}
          </p>
          <p class="card-text">値段：{{ optional($product)->price }}円</p>
      </div>
     </main>
</body>
</html>