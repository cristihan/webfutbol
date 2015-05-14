@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Estadisticas de jugadores</div>

                    <div class="panel-body">

                        <a href="{{ route('partidos.show', $partido)}}">Volver</a>

                        <h2>
                            Estadisticas
                        </h2>

                        @if ( Session::get('message') )
                            <strong>{{ Session::get('message') }}</strong>
                        @endif

                        {!! Form::open(['route'=>['partidos.jugadores.estadisticas.update', $partido]]) !!}

                        {!! Form::submit('Guardar Estadisticas') !!}

                        <table class="table table-striped">
                            <tr>
                                <th>dni</th>
                                <th>Nombre</th>
                                <th>Minutos Jugados</th>
                                <th>Goles A Favor</th>
                                <th>Autogol</th>
                                <th>Tarjetas Amarillas</th>
                                <th>Tarjetas Rojas</th>

                            </tr>
                            @foreach($partido->jugadores as $jugador)
                                <tr>
                                    <td>{{ $jugador->dni }}</td>
                                    <td>{{ $jugador->nombre }} {{ $jugador->apellidos }}</td>
                                    <td>{!! Form::text("minutos[$jugador->id]", $jugador->pivot->minutos) !!}</td>
                                    <td>{!! Form::text("goles_favor[$jugador->id]", $jugador->pivot->goles_favor) !!}</td>
                                    <td>{!! Form::text("goles_contra[$jugador->id]", $jugador->pivot->goles_contra) !!}</td>
                                    <td>{!! Form::text("tarjetas_amarillas[$jugador->id]", $jugador->pivot->tarjetas_amarillas) !!}</td>
                                    <td>{!! Form::text("tarjetas_rojas[$jugador->id]", $jugador->pivot->tarjetas_rojas) !!}</td>
                                </tr>
                            @endforeach
                        </table>

                        {!! Form::submit('Guardar Estadisticas') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection