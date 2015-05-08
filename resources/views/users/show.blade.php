@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Usuarios</div>               

                <div class="panel-body">                  
                    
                    <table class="table table-striped">                        
                        
                        <tr>
                            <th>#</th>
                            <th>Nombre</th> 
                             <th>Email</th>  
                              <th>Tipo</th>  

                        </tr>
                            <td>{{$user->id }}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            
                    </table>     
          <h2>Perfil</h2>
          
                   <a href="{{ route('perfil.edit', [$user->perfil]) }}">editar perfil</a>
                   
                   <table class="table table-striped">
                        
                        
                        <tr>
                            <th>#</th>
                            <th>Nombre</th> 
                             <th>Apellidos</th>  
                             <th>Telefono</th>
                             <th>Direccion</th> 
                             <th>CP</th> 
                             <th>Localidad</th> 

                        </tr>
                            <td>{{$user->perfil->id }}</td>
                            <td>{{$user->perfil->nombre}}</td>
                            <td>{{$user->perfil->apellidos}}</td>
                            <td>{{$user->perfil->telefono}}</td>                            
                            <td>{{$user->perfil->direccion}}</td>
                            <td>{{$user->perfil->cp}}</td>
                            <td>{{$user->perfil->localidad}}</td>
                   </table> 
                   
                   
                   @if($user->type == 'entrenador')
                        <h2>Datos de entrenador</h2>
                    
                        @if($user->entrenador)
                            <a href="{{ route('entrenador.edit', $user->entrenador) }}">
                                Modificar datos de entrenador
                            </a>

                            <table class="table table-striped">
                                <tr>
                                    <th>Cargo</th>
                                    <th>Categoria</th>
                                </tr>
                                <tr>
                                    <td>{{ $user->entrenador->cargo }}</td>
                                    <td>{{ $user->entrenador->categoria->nombre }}</td>
                                </tr>
                            </table>
                        @else
                            <a href="{{ route('entrenador.create', $user) }}">
                                Agregar datos de entrenador
                            </a>
                        @endif
                    @endif


                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

