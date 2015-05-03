@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Categorias</div>

                <div class="panel-body">
                    <h1>Listado de Equipos por Categorias</h1><br>
                    <a class="btn btn-info" href="{{route('categorias.create')}}" role="button">Nueva Categoria</a><br>
                    @include('categorias.partials.table')                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

