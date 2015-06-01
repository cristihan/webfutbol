<table class="table table-striped">

    <tr>
        <th>#</th>                           
        <th>{{ trans('validation.attributes.email') }}</th>  
        <th>{{ trans('validation.attributes.tipo') }}</th>
        <th>{{ trans('validation.attributes.acciones') }}</th>


    </tr>
    @foreach($users as $user)
    <tr data-id="{{$user->id}}">
        <td>{{$user->id }}</td>                            
        <td>{{$user->email}}</td>
        <td>{{$user->type}}</td>

        <td>
            <a class="btn btn-primary" href="{{route('users.edit', $user)}}">{{ trans('validation.attributes.editar') }}</a>
            <a href="" class="btn btn-danger">{{ trans('validation.attributes.eliminar') }}</a>                             
            <a class="btn btn-warning" href="{{route('users.show', $user)}}" role="button">{{ trans('validation.attributes.mostrar') }}</a>            
        </td>
    </tr>
    @endforeach
</table>