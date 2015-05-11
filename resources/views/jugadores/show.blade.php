@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Datos del jugador</div>               

                <div class="panel-body">                  

                    <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Dni</th>
                            <th>FNAC</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Direccion</th>
                           <th>CP</th>   
                            <th>Localidad</th>                          
                            <th>Habilidad</th> 
                            <th>Posicion</th>
                            <th>Categoria</th> 
                            <th>Padre</th> 
                        </tr>
                               
                            <td>{{$jugador->id}}</td>
                            <td>{{$jugador->nombre }}</td>
                            <td>{{$jugador->apellidos}}</td>
                            <td>{{$jugador->dni}}</td> 
                            <td>{{$jugador->fecha_nacimiento}}</td>
                            <td>{{$jugador->telefono}}</td>
                            <td>{{$jugador->email}}</td>
                            <td>{{$jugador->direccion}}</td>
                            <td>{{$jugador->cp}}</td> 
                            <td>{{$jugador->localidad}}</td>
                            <td>{{$jugador->habilidad}}</td> 
                            <td>{{$jugador->posicion}}</td> 
                            <td>{{$jugador->categoria->nombre}}</td>
                            <td>{{$jugador->padre->nombre}}</td>                                           
                                                                                          
                   </table>                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

