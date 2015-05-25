@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Datos de Entrenamientos</div>               

                <div class="panel-body">                  

                    <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Fecha De Entrenamiento</th>   
                            <th>Campo</th> 
                            <th>Dia Entrenamiento</th>
                            <th>Categoria</th>
                        </tr>
                        
                        <tr>
                       <td>{{$entrenamientos->id }}</td>
                       <td>{{$entrenamientos->fecha}}</td> 
                       <td>{{$entrenamientos->campo}}</td>
                       <td>{{$entrenamientos->dias}}</td>
                       <td>{{$entrenamientos->categoria->nombre}}</td> 
                       </tr>                                             
                        
                    </table> 
                    
                    <h2>Asistencia</h2>
                   <a href="{{ route('entrenamientos.asistencia', $entrenamientos) }}">Editar Asistencia de jugadores</a>
                    
                   <table class="table table-striped">
                        <tr>
                            <th>Asistido</th>
                            <th>dni</th>
                            <th>Nombre</th>
                            <th>Justificacion Asistencia</th>
                            <th>Motivo</th>
                            <th>Categoria</th>
                        </tr>
                        @foreach($entrenamientos->jugadores as $jugador)
                             <tr> 
                                <td>{{$jugador->pivot->asistido}}</td>
                                
                                <td>{{ $jugador->dni }} </td>
                                <td>{{ $jugador->nombre }} {{ $jugador->apellidos }}</td>
                                <td>{{ $jugador->pivot->asistencia }}</td>
                                <td>{{ $jugador->pivot->motivo }}</td>
                                <td>{{ $jugador->categoria->nombre }}</td>
                               
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
             <a href="{{ route('entrenamientos.index', $entrenamientos)}}">Volver</a>
        </div>
    </div>
</div>
@endsection

