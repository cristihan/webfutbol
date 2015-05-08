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
          
                   <a href="{{ route('partidos.edit.estadisticas')}}">editar Estadisticas</a>
                   
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
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

