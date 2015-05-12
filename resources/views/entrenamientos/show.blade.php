@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mostrar Datos de Entrenamientos</div>               

                <div class="panel-body">                  

                    <table class="table table-striped">

                        <tr>
                            <th>#</th>
                            <th>Fecha De Entrenamiento</th>                          

                        </tr>
                       <td>{{$entrenamiento->id }}</td>
                       <td>{{$entrenamiento->fecha}}</td>                     
                                                                    
                        
                    </table>            
                </div>
            </div>
             <a href="{{ route('entrenamientos.index', $entrenamiento)}}">Volver</a>
        </div>
    </div>
</div>
@endsection

