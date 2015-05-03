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

                        </tr>
                       <td>{{$categoria->id }}</td>
                       <td>{{$categoria->nombre}}</td>                     
                                                                    
                        
                    </table>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

