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
    <h2>Título de mi página</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam asperiores dolorum est nemo nostrum
        obcaecati quod tempora veritatis! Accusantium alias aliquid delectus eligendi, modi nihil nulla obcaecati quasi
        totam.</p>

    @include('layout.nav')
</div>
</body>
</html>
