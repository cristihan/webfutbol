@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Usuarios</div>

                    <div class="panel-body">

                        {!!Form::model($perfil, ['route' => ['perfil.update', $perfil], 'method' => 'PUT']) !!}
                        @include('users.partials.profile_fields')
                        <button type="submit" class="btn btn-default">Actualizar Usuario</button>
                        {!!Form::close() !!}

                    </div>
                </div>           
        </div>
    </div>
</div>
@endsection

