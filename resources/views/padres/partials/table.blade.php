 <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                         


                        </tr>
                        @foreach($padres as $padre)
                        
                            <td>{{$padre->id }}</td>
                            <td>{{$padre->nombre}}</td>
                            <td>{{$padre->apellidos}}</td>
                            <td>{{$padre->telefono}}</td>
                            <td>{{$padre->Email}}</td>
                 
                            <td>
                     <a href="{{route('users.edit', $user)}}">Editar</a>
                     <a href="" class="btn-delete">Eliminar</a>                             
                     <a class="" href="{{route('users.show', $user)}}" role="button">Mostrar</a>            
                            </td>
                        </tr>
                        @endforeach
                    </table>