@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>                
                 

                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('padres.create')}}" role="button">Nuevo Padre</a> 
                    
                   <p>Hay {{ $padres->total()}} Padres</p>

                     @include('padres.partials.table')
                     {!! $padres->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



