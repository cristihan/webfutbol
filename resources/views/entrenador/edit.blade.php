@extends('layout.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Datos de entrenador</div>

                    <div class="panel-body">


                        {!!Form::model($entrenador, ['route' => ['entrenador.update', $entrenador], 'method' => 'PUT']) !!}
                        @include('entrenador.partials.fields')
                        <button type="submit" class="btn btn-success">Guardar</button>
                        {!!Form::close() !!}

                    </div>
                </div>
                <p>{!! link_to_route('users.show', 'Regresar', "", array('class' => 'btn btn-danger')) !!}</p>
            </div>
        </div>
    </div>
@endsection

