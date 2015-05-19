@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuarios</div>               

                <div class="panel-body">

                    {!!Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}
                      @include('users.partials.fields')
                    <button type="submit" class="btn btn-success">Actualizar Usuario</button>
                    {!!Form::close() !!}                  
                    
                </div>
            </div>
            <p>{!! link_to_route('users.index', 'Regresar al Index', "", array('class' => 'btn btn-danger')) !!}</p>
            @include('users.partials.delete')
        </div>
    </div>
</div>
@endsection

