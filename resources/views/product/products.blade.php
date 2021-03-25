<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="header">
      <h1>Throw it</h1>
    </div>
  </header>

  <main>
    @foreach($products as $product)
    <a href="#" class="products_link">
      <div class="products">
        <div class="products_img">
          <img src="{{ $product->image }}" alt="products_img">
          <span>
            ¥{{ $product->price }}
          </span>
        </div>
        <div class="products_name">
          <h2>
            {{ $product->name }}
          </h2>
        </div>
      </div>
    </a>
    @endforeach
  </main>
  <footer>

  </footer>
</body>
</html>
