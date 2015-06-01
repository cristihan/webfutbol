@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('validation.attributes.mostrar_usuarios') }}</div>               

                <div class="panel-body">                  
                    
                    <table class="table table-striped">                        
                        
                        <tr>
                            <th>#</th>
                            <th>{{ trans('validation.attributes.nombre') }}</th> 
                            <th>{{ trans('validation.attributes.email') }}</th>  
                            <th>{{ trans('validation.attributes.tipo') }}</th>  

                        </tr>
                            <td>{{$user->id }}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            
                    </table>     
          <h2>{{ trans('validation.attributes.perfil') }}</h2>
          
                   <a class="btn btn-success" href="{{ route('perfil.edit', [$user->perfil]) }}">{{ trans('validation.attributes.editar_perfil') }}</a>
                   
                   <table class="table table-striped">
                        
                        
                        <tr>
                            <th>#</th>
                            <th>{{ trans('validation.attributes.nombre') }}</th> 
                            <th>{{ trans('validation.attributes.apellidos') }}</th>  
                            <th>{{ trans('validation.attributes.telefono') }}</th>
                            <th>{{ trans('validation.attributes.direccion') }}</th> 
                            <th>{{ trans('validation.attributes.cp') }}</th> 
                            <th>{{ trans('validation.attributes.localidad') }}</th> 

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
                        <h2>{{ trans('validation.attributes.datos_entrenador') }}</h2>
                    
                        @if($user->entrenador)
                            <a class="btn btn-success" href="{{ route('entrenador.edit', $user->entrenador) }}">
                                {{ trans('validation.attributes.modificar_entrenador') }}
                            </a>

                            <table class="table table-striped">
                                <tr>
                                    <th>{{ trans('validation.attributes.cargo') }}</th>
                                    <th>{{ trans('validation.attributes.categoria') }}</th>
                                </tr>
                                <tr>
                                    <td>{{ $user->entrenador->cargo }}</td>
                                    <td>{{ $user->entrenador->categoria->nombre }}</td>
                                </tr>
                            </table>
                        @else
                            <a class="btn btn-success" href="{{ route('entrenador.create', $user) }}">
                                {{ trans('validation.attributes.agregar_entrenador') }}
                            </a>
                        @endif
                    @endif


                
                </div>
            </div>
          <p>{!! link_to_route('users.index', 'Regresar al Index', "", array('class' => 'btn btn-danger')) !!}</p>   
        </div>
    </div>
</div>
@endsection

