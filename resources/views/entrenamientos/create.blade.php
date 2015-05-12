@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Entrenamiento</div>

                <div class="panel-body">                   
                    
                    
                  {!!Form::open(['route' => 'entrenamientos.store', 'method' => 'POST']) !!}
                    @include('entrenamientos.partials.fields')
                     <button type="submit" class="btn btn-default">Crear Entrenamiento</button>
                  {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

