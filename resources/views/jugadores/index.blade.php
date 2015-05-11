@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Jugadores</div>               
               

                <div class="panel-body">                    
                    <a class="btn btn-info" href="{{route('jugadores.create')}}" role="button">Nuevo Jugador</a> 
                   
                   <p>Hay {{ $jugadores->total()}} Jugadores</p>

                     @include('jugadores.partials.table')
                     {!! $jugadores->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



