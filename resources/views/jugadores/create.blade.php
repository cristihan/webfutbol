@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulario de Alta Jugador</div>

                    <div class="panel-body">                  
                                              
                        {!!Form::open(['route' =>'jugadores.store', 'method' => 'POST']) !!}
                     
                        @include('jugadores.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>
                        {!!Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

