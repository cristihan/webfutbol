@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Categorias</div>

                <div class="panel-body">
                    <h1>Listado de Equipos por Categorias</h1>
                     
                                        <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Nombre</th>                          

                        </tr>
                        @foreach($categorias as $categoria)
                        <tr>
                          <td>{{categoria->id}}</td>
                            <td>{{categoria->nombre}}</td>
                          
                 
                            <td>
                               <a href="">Editar</a>
                                <a href="" class="btn-delete">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

