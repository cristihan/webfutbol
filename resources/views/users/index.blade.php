@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('users.create')}}" role="button">Crear Nuevo Usuario</a> 
                    
                   <p>Hay {{ $users->total()}} Usuarios</p>
                  <p>Usted esta en la pagina {{ $users->currentPage()}}</p>
                    <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th>Acciones</th>


                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id }}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                    <!--        <td>{{$user->type}}</td>-->
                            <td>
                                <a href="">Editar</a><!--nombre de la ruta y el id del usuario-->
                                <a href="" class="btn-delete">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                     {!! $users->render() !!}-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

