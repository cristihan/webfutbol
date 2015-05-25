<!doctype html>
<html lang="es">
<head>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Webfutbol</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
</head>
<body>

@include('layout.partials.header')

@include('layout.partials.nav')

@yield('content')

 @yield('scripts')       

        <!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
 @include('layout.partials.footer')       

</body>
</html>
