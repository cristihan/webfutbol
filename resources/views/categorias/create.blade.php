@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Categorias</div>

                <div class="panel-body">
                    
                     @include('categorias.partials.messages')
                    
                  {!!Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}
                    @include('categorias.partials.fields')
                     <button type="submit" class="btn btn-default">Crear Categoria</button>
                  {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

