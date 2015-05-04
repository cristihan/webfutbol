 <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th>Acciones</th>


                        </tr>
                        @foreach($users as $user)
                        <tr data-id="{{$user->id}}">
                            <td>{{$user->id }}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                 
                            <td>
                     <a href="{{route('users.edit', $user)}}">Editar</a>
                     <a href="" class="btn-delete">Eliminar</a>                             
                     <a class="" href="{{route('users.show', $user)}}" role="button">Mostrar</a>            
                            </td>
                        </tr>
                        @endforeach
                    </table>