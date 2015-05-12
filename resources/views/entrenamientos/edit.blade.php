@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Fecha De Entrenamiento</div>

                <div class="panel-body">
                  {!!Form::model($entrenamiento,['route' => ['entrenamientos.update', $entrenamiento], 'method' => 'PUT']) !!}
                    @include('entrenamientos.partials.fields')
                     <button type="submit" class="btn btn-default">Actualizar Entrenamiento</button>
                  {!!Form::close() !!}
                  
                </div>
            </div> 
             @include('entrenamientos.partials.delete')
        </div>
    </div>
</div>
@endsection

