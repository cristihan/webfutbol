@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ver Usuarios</div>               

                <div class="panel-body">
                     <p>Hay {{ $users->name()}}</p> 
                    {!!Form::model($user, ['route' => ['users.show', $user], 'method' => 'PUT']) !!}
                      @include('users.partials.fields')
                    <button type="submit" class="btn btn-default">Actualizar Usuario</button>
                    {!!Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

