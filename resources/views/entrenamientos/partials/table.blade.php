<table class="table table-striped">

    <tr>
        <th>#</th>
        <th>Fecha</th>    
        <th>Campo</th> 
        <th>Dia Entrenamiento</th>
        <th>Acciones</th> 

    </tr>
    @foreach($entrenamientos as $entrenamiento)
       <tr data-id="{{$entrenamiento->id}}">
        <td>{{$entrenamiento->id}}</td>
        <td>{{$entrenamiento->fecha}}</td>
        <td>{{$entrenamiento->campo}}</td>
        <td>{{$entrenamiento->dias}}</td>


        <td>
            <a href="{{route('entrenamientos.edit', $entrenamiento)}}">Editar</a>
            <a href="" class="btn-delete">Eliminar</a>
            <a class="" href="{{route('entrenamientos.show', $entrenamiento)}}" role="button">Mostrar</a>
        </td>
    </tr>
    @endforeach
</table>