@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('validation.attributes.mostrar_partido') }}</div>               
                  
                <div class="panel-body">               
            {!! link_to_route('partidos.index', 'Regresar al Index', "", array('class' => 'btn btn-danger')) !!}                                             
                    <table class="table table-striped">

                        <tr>                            
                            <th>#</th>
                            <th>{{ trans('validation.attributes.rival') }}</th>
                            <th>{{ trans('validation.attributes.campo') }}</th>
                            <th>{{ trans('validation.attributes.estado') }}</th>
                            <th>{{ trans('validation.attributes.fecha') }}</th>
                            <th>{{ trans('validation.attributes.jornada') }}</th>                                                     
                            <th>{{ trans('validation.attributes.categoria') }}</th> 

                        </tr>
                      
                        
                            <td>{{$partidos->id }}</td>
                            <td>{{$partidos->rival}}</td>
                            <td>{{$partidos->campo}}</td>
                            <td>{{$partidos->estado}}</td>
                            <td>{{$partidos->fecha}}</td>
                            <td>{{$partidos->jornada}}</td>                           
                            <td>{{$partidos->categoria->nombre}}</td>                   
                                                                                            
                    </table>  
                    
                    <h2>{{ trans('validation.attributes.editar_estadisticas') }}</h2>
          
                   <a href="{{ route('partidos.edit.estadisticas', $partidos)}}">{{ trans('validation.attributes.editar_estadisticas') }}</a>
                   
                   <table class="table table-striped">
                        
                        
                        <tr>
                            <th>{{ trans('validation.attributes.goles_favor') }}</th>
                            <th>{{ trans('validation.attributes.goles_contra') }}</th>
                            <th>{{ trans('validation.attributes.tarjeta_amarilla') }}</th>
                            <th>{{ trans('validation.attributes.tarjeta_roja') }}</th> 

                        </tr>
                            <td>{{$partidos->goles_a_favor}}</td>
                            <td>{{$partidos->goles_en_contra}}</td>
                            <td>{{$partidos->tarjetas_amarillas}}</td>
                            <td>{{$partidos->tarjetas_rojas}}</td>
                   </table> 
                   
                   <h2>{{ trans('validation.attributes.convocado') }}</h2>
                   <a href="{{ route('partidos.convocar', $partidos) }}">{{ trans('validation.attributes.convocatoria') }}</a>
                    
                   <table class="table table-striped">
                        <tr>
                            <th>{{ trans('validation.attributes.titular') }}</th>
                            <th>{{ trans('validation.attributes.dni') }}</th>
                            <th>{{ trans('validation.attributes.nombre') }}</th>
                            <th>{{ trans('validation.attributes.habilidad') }}</th>
                            <th>{{ trans('validation.attributes.posicion') }}</th>
                            <th>{{ trans('validation.attributes.categoria') }}</th>
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
                   
                   <h2>{{ trans('validation.attributes.estadistica_jugador') }}</h2>
                   <a href="{{ route('partidos.jugadores.estadisticas', $partidos) }}">{{ trans('validation.attributes.editar_estadistica_jugador') }}</a>
                    
                   <table class="table table-striped">
                        <tr> 
                            <th>{{ trans('validation.attributes.dni') }}</th>
                            <th>{{ trans('validation.attributes.nombre') }}</th>
                            <th>{{ trans('validation.attributes.minuto_jugado') }}</th>
                            <th>{{ trans('validation.attributes.goles_favor') }}</th>
                            <th>{{ trans('validation.attributes.autogol') }}</th>
                            <th>{{ trans('validation.attributes.tarjeta_amarilla') }}</th>
                            <th>{{ trans('validation.attributes.tarjeta_roja') }}</th> 
                        </tr>
                        @foreach($partidos->jugadores as $jugador)
                            <tr> 
                                <td>{{ $jugador->dni }} </td>
                                <td>{{ $jugador->nombre }} {{ $jugador->apellidos }}</td>
                                <td>{{ $jugador->pivot->minutos }}</td>
                                <td>{{ $jugador->pivot->goles_favor }}</td>
                                <td>{{ $jugador->pivot->goles_contra }}</td>
                                <td>{{ $jugador->pivot->tarjetas_amarillas }}</td>
                                <td>{{ $jugador->pivot->tarjetas_rojas}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            {!! link_to_route('partidos.index', 'Regresar al Index', "", array('class' => 'btn btn-danger')) !!}
        </div>
    </div>
</div>
@endsection

