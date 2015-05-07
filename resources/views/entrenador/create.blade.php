@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Usuarios</div>

                    <div class="panel-body">                     
                        
                        @include('entrenador.partials.messages') 

                        {!!Form::open(['route' =>'entrenador.store', 'method' => 'POST']) !!}
                        {!! Form::hidden('user_id', $user) !!}
                        @include('entrenador.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>
                        {!!Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

