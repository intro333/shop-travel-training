Страница с проодуктами

@foreach($products as $product)
    <p>Название продукта <b>{{ $product->name }}</b></p>

@endforeach