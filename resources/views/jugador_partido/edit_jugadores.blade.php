@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Estadisticas jugadores</div>

                    <div class="panel-body">

                        <a href="{{ route('partidos.show', $partido)}}">Volver</a>

                        <h2>
                            Estadisticas
                        </h2>

                        @if ( Session::get('message') )
                            <strong>{{ Session::get('message') }}</strong>
                        @endif

                        {!! Form::open(['route'=>['partidos.estadisticas.update', $partido]]) !!}

                        {!! Form::submit('Guardar Estadisticas') !!}

                        <table class="table table-striped">
                            <tr>
                                <th>Convocar</th>
                                <th>Titular</th>
                                <th>Minutos Jugados</th>
                                <th>Goles A Favor</th>
                                <th>Autogol</th>
                               <th>Tarjetas Amarillas</th>
                                <th>Tarjetas Rojas</th>
                                
                            </tr>
                            @foreach($jugadores as $jugador)
                                <tr>
                                    <td>{!! Form::checkbox('jugador_id[]', $jugador->id, $partido->convocado($jugador->id)) !!}</td>
                                    <td>{!! Form::checkbox('titular[]', $jugador->id, $partido->titular($jugador->id)) !!}</td>
                                    <td>{{ $jugador->minutos }}</td>
                                    <td>{{ $jugador->goles_favor }}</td>
                                    <td>{{ $jugador->goles_contra }}</td>
                                    <td>{{ $jugador->tarjetas_amarillas }}</td>
                                    <td>{{ $jugador->categoria->tarjetas_rojas }}</td>
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