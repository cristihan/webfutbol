<!doctype html>
<html lang="es">
<head>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
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
