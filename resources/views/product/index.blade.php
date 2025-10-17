<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>КаталогТоваров</h1>
    <p>{{$buyer->user->name}}</p>
    <p>{{$buyer->address}}</p>
    <div class="container">
        <a href="{{route('products.create')}}">Создать продукт</a>

        @foreach($categories as $category)
        <h2>{{$category->name}}</h2>
        @foreach($category->products as $product)
        <a href="{{route('products.show', $product->id)}}">
            <div class="card">
                <p>{{$product->name}}</p>
                <p>{{$product->description}}</p>
                <p>Цена: {{$product->price}} &#8381</p>

                <p>Категория: {{$product->category->name}}</p>

                <form method="POST" action="{{route('products.destroy', $product->id)}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="удалить">
                </form>
                <hr>
            </div>
        </a>
        @endforeach
        @endforeach
    </div>
</body>

</html>