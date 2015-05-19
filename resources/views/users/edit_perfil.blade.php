@extends('layout.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Usuarios</div>

                    <div class="panel-body">

                        {!!Form::model($perfil, ['route' => ['perfil.update', $perfil], 'method' => 'PUT']) !!}
                        @include('users.partials.profile_fields')
                        <button type="submit" class="btn btn-success">Actualizar Usuario</button>
                        {!!Form::close() !!}

                    </div>
                </div>    
        <p>{!! link_to_route('users.show', 'Regresar', "", array('class' => 'btn btn-danger')) !!}</p>        
        </div>
    </div>
</div>
@endsection

