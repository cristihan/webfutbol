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
                            <th>Localidad</th>                       
                            <th>Categoria</th> 
                            <th>Padre</th> 

                        </tr>
                        @foreach($jugadores as $jugador)
                        <tr>
                            <td>{{$jugador->id}}</td>
                            <td>{{$jugador->nombre }}</td>
                            <td>{{$jugador->apellidos}}</td>
                            <td>{{$jugador->dni}}</td> 
                            <td>{{$jugador->fecha_nacimiento}}</td>
                            <td>{{$jugador->telefono}}</td>
                            <td>{{$jugador->email}}</td>
                            <td>{{$jugador->direccion}}</td>                            
                            <td>{{$jugador->localidad}}</td>                           
                            <td>{{$jugador->categoria->nombre}}</td>
                            <td>{{$jugador->padre->nombre}}</td>
                 
                            <td>
                     <a href="{{route('jugadores.edit', $jugador)}}">Editar</a>
                     <a href="" class="btn-delete">Eliminar</a>                             
                     <a class="" href="{{route('jugadores.show', $jugador)}}" role="button">Mostrar</a>            
                            </td>
                        </tr>
                        @endforeach
    </table>