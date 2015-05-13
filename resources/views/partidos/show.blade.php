@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Datos del Partido</div>               

                <div class="panel-body">                  

                    <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Rival</th>
                            <th>Campo</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Jornada</th>                                                     
                            <th>Categoria</th> 

                        </tr>
                      
                        
                            <td>{{$partidos->id }}</td>
                            <td>{{$partidos->rival}}</td>
                            <td>{{$partidos->campo}}</td>
                            <td>{{$partidos->estado}}</td>
                            <td>{{$partidos->fecha}}</td>
                            <td>{{$partidos->jornada}}</td>                           
                            <td>{{$partidos->categoria->nombre}}</td>                   
                                                                                            
                    </table>  
                    
                    <h2>Editar Estadisticas</h2>
          
                   <a href="{{ route('partidos.edit.estadisticas', $partidos)}}">editar Estadisticas</a>
                   
                   <table class="table table-striped">
                        
                        
                        <tr>
                            <th>Goles_Favor</th>
                            <th>Goles_contra</th>
                            <th>Tarjetas Amarillas</th>
                            <th>Tarjetas_rojas</th> 

                        </tr>
                            <td>{{$partidos->goles_a_favor}}</td>
                            <td>{{$partidos->goles_en_contra}}</td>
                            <td>{{$partidos->tarjetas_amarillas}}</td>
                            <td>{{$partidos->tarjetas_rojas}}</td>
                   </table> 
                   
                   <h2>Convocados</h2>
                   <a href="{{ route('partidos.convocar', $partidos) }}">Editar convocatoria de jugadores</a>
                    
                   <table class="table table-striped">
                        <tr>
                            <th>Titular</th>
                            <th>dni</th>
                            <th>Nombre</th>
                            <th>Habilidad</th>
                            <th>Posicion</th>
                            <th>Categoria</th>
                        </tr>
                        @foreach($partidos->jugadores as $jugador)
                            <tr>
                                <td>
                                    @if ($jugador->pivot->titular)
                                    si
                                    @else
                                    no
                                    @endif
                                </td>
                                <td>{{ $jugador->dni }}</td>
                                <td>{{ $jugador->nombre }} {{ $jugador->apellidos }}</td>
                                <td>{{ $jugador->habilidad }}</td>
                                <td>{{ $jugador->posicion }}</td>
                                <td>{{ $jugador->categoria->nombre }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

