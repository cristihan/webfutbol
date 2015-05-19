@extends('layout.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Actualizar Datos De Jugador</div>

                    <div class="panel-body">


                        {!!Form::model($jugador, ['route' => ['jugadores.update', $jugador], 'method' => 'PUT']) !!}
                        @include('jugadores.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>
                        {!!Form::close() !!}

                    </div>
                </div>
                 @include('jugadores.partials.delete')
            </div>
        </div>
    </div>
@endsection

