@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Convocar jugadores</div>

                    <div class="panel-body">

                        <a href="{{ route('partidos.show', $partido)}}">
                            Volver
                        </a>

                        <h2>
                            Jugadores
                        </h2>

                        @if ( Session::get('message') )
                            <strong>{{ Session::get('message') }}</strong>
                        @endif

                        {!! Form::open(['route'=>['partidos.convocar.update', $partido]]) !!}

                        {!! Form::submit('Guardar convocados') !!}

                        <table class="table table-striped">
                            <tr>
                                <th>Convocar</th>
                                <th>Titular</th>
                                <th>dni</th>
                                <th>Nombre</th>
                                <th>Habilidad</th>
                                <th>Posicion</th>
                                <th>Categoria</th>
                            </tr>
                            @foreach($jugadores as $jugador)
                                <tr>
                                    <td>{!! Form::checkbox('jugador_id[]', $jugador->id, $partido->convocado($jugador->id)) !!}</td>
                                    <td>{!! Form::checkbox('titular[]', $jugador->id, $partido->titular($jugador->id)) !!}</td>
                                    <td>{{ $jugador->dni }}</td>
                                    <td>{{ $jugador->nombre }} {{ $jugador->apellidos }}</td>
                                    <td>{{ $jugador->habilidad }}</td>
                                    <td>{{ $jugador->posicion }}</td>
                                    <td>{{ $jugador->categoria->nombre }}</td>
                                </tr>
                            @endforeach
                        </table>

                        {!! Form::submit('Guardar convocados') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection