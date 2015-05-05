@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Padres</div>               

                <div class="panel-body">                  
                    
                    <table class="table table-striped">                        
                        
                        <tr>
                            <th>#</th>
                            <th>Nombre</th> 
                            <th>Apellidos</th>  
                            <th>Telefono</th>  
                            <th>Telefono</th>
                        </tr>
                            <td>{{$padre->id }}</td>
                            <td>{{$padre->nombre}}</td>
                            <td>{{$padre->apellidos}}</td>
                            <td>{{$padre->telefono}}</td>
                            <td>{{$padre->email}}</td>
                            
                    </table>  
                                 
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

