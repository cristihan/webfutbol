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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

