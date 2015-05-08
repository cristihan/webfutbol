@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Actualizar Datos Del Partido</div>

                    <div class="panel-body">


                        {!!Form::model($partido, ['route' => ['partidos.update.estadisticas', $partido], 'method' => 'PUT']) !!}
                        @include('partidos.partials.estadisticas_fields')
                        <button type="submit" class="btn btn-default">Guardar</button>
                        {!!Form::close() !!}

                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection

