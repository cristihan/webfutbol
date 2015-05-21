@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Convocar jugadores</div>

                    <div class="panel-body">

                        <a href="{{ route('partidos.show', $partido)}}">Volver</a>                        
                        
                          <table class="table table-striped">
                              <tr>     
                            <th>#</th>
                            <th>Fecha De Entrenamiento</th>   
                            <th>Campo</th> 
                            <th>Dia Entrenamiento</th>
                            <th>Categoria</th>

                        </tr>
                       <td>{{$entrenamiento->id }}</td>
                       <td>{{$entrenamiento->fecha}}</td> 
                       <td>{{$entrenamiento->campo}}</td>
                       <td>{{$entrenamiento->dias}}</td>
                       <td>{{$entrenamiento->categoria->nombre}}</td> 

                        </table>
                        
                        <h2>
                            Jugadores
                        </h2>

                        @if ( Session::get('message') )
                            <strong>{{ Session::get('message') }}</strong>
                        @endif

                        {!! Form::open(['route'=>[''entrenamientos.asistencia.update', $entrenamiento]]) !!}

                        {!! Form::submit('Guardar asistencia') !!}

                        <table class="table table-striped">
                            <tr>                               
                            <th>Asistido</th>
                            <th>dni</th>
                            <th>Nombre</th>
                            <th>Justificacion Asistencia</th>
                            <th>Motivo</th>
                            <th>Categoria</th>
                            </tr>
                            
                                <tr>
                                  
                                </tr>
                           
                        </table>

                        {!! Form::submit('Guardar convocados') !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection