@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Partidos</div>               
                

                <div class="panel-body">
                    <h1>Listado de Partidos</h1><br>
                    
                    <a class="btn btn-info" href="{{route('partidos.create')}}" role="button">Nuevo Partido</a><br>
                    @include('partidos.partials.table')                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


