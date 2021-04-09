<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">
    <h2>Lista de Productos</h2>

    @include('layout.nav')

    <ul>
        @foreach($productos as $item)
            <ul>{{ $item['nombre'] }} - ${{ number_format($item['precio'], 2) }}</ul>
        @endforeach
    </ul>
    <p>Cantidad de productos {{ count($productos) }}</p>
</div>
</body>
</html>
