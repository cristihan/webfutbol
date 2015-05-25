<table class="table table-striped">

    <tr>
        <th>#</th>                           
        <th>Email</th>
        <th>Tipo</th>
        <th>Acciones</th>


    </tr>
    @foreach($users as $user)
    <tr data-id="{{$user->id}}">
        <td>{{$user->id }}</td>                            
        <td>{{$user->email}}</td>
        <td>{{$user->type}}</td>

        <td>
            <a class="btn btn-primary" href="{{route('users.edit', $user)}}">Editar</a>
            <a href="" class="btn btn-danger">Eliminar</a>                             
            <a class="btn btn-warning" href="{{route('users.show', $user)}}" role="button">Mostrar</a>            
        </td>
    </tr>
    @endforeach
</table>