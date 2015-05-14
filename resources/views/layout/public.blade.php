<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Webfutbol</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
</head>
<body>

@include('layout.partials.header')

@include('layout.partials.nav')

@yield('content')

@include('layout.partials.footer')

</body>
</html>
