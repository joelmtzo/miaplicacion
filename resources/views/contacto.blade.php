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
    <h2>Contacto</h2>

    @include('layout.nav')

    <form action="">
        <label for="">Nombre</label><br>
        <input type="text"><br><br>

        <label for="">Mensaje</label><br>
        <textarea name="" id="" cols="30" rows="5"></textarea>

        <br><br>
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>
