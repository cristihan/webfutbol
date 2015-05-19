@extends('layout.public')

@section('content')

    <div class="row">

        <div class="content">

            @include('app.partials.ultimas_noticias')

            @include('app.partials.inscripciones')
            
            @include('app.partials.ubicacion')
            
            @include('app.partials.actualidad')

        </div>

    </div>

@endsection
