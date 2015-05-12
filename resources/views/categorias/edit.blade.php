@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Categorias</div>

                <div class="panel-body">
                  {!!Form::model($categoria,['route' => ['categorias.update', $categoria], 'method' => 'PUT']) !!}
                    @include('categorias.partials.fields')
                     <button type="submit" class="btn btn-default">Actualizar Categoria</button>
                  {!!Form::close() !!}
                  
                </div>
            </div>
            @include('categorias.partials.delete')
        </div>
    </div>
</div>
@endsection

