<table class="table table-striped">

    <tr>
        <th>#</th>
        <th>Nombre</th>                          

    </tr>
    @foreach($categorias as $categoria)
   <tr data-id="{{$categoria->id}}">
        <td>{{$categoria->id}}</td>
        <td>{{$categoria->nombre}}</td>


        <td>
            <a href="{{route('categorias.edit', $categoria)}}">Editar</a>
            <a href="" class="btn-delete">Eliminar</a>
            <a class="" href="{{route('categorias.show', $categoria)}}" role="button">Mostrar</a>
        </td>
    </tr>
    @endforeach
</table>