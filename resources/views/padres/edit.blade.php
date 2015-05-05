@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Padre:: {{ $padre->nombre}}</div>               

                <div class="panel-body">

                    {!!Form::model($padre, ['route' => ['padres.update', $padre], 'method' => 'PUT']) !!}
                      @include('padres.partials.fields')
                    <button type="submit" class="btn btn-default">Actualizar Padre</button>
                    {!!Form::close() !!}                  
                    
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection

