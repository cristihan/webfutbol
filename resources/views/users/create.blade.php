@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Usuarios</div>               

                <div class="panel-body">

                    {!!Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {!!Form::label('email', 'Correo Electronico') !!};
                        {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introducir email']) !!}                          
                    </div>
                    <div class="form-group">
                        {!!Form::label('password', 'Contraseña') !!};
                        {!!Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('name', 'Nombre y Apellido') !!};
                        {!!Form::text('name', null, ['class' => 'form-control']) !!}

                    </div>                    
                    <div class="form-group">
                        {!!Form::label('type', 'Tipo de Usuario') !!};
                        {!!Form::select('type', ['' => 'Seleccione tipo', 'entrenador' => 'Usuario', 'administrador' => 'Administrador'], null, ['class' => 'form-control']) !!}

                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                    {!!Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

