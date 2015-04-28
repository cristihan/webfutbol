@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuarios</div>               

                <div class="panel-body">

                    {!!Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}
                      @include('users.partials.fields')
                    <button type="submit" class="btn btn-default">Actualizar Usuario</button>
                    {!!Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

