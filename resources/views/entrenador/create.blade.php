@extends('layout.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('validation.attributes.nuevo_entrenador') }}</div>

                    <div class="panel-body">                     
                        
                        @include('entrenador.partials.messages') 

                        {!!Form::open(['route' =>'entrenador.store', 'method' => 'POST']) !!}
                        {!! Form::hidden('user_id', $user) !!}
                        @include('entrenador.partials.fields')
                        <button type="submit" class="btn btn-success">{{ trans('validation.attributes.guardar') }}</button>
                        {!!Form::close() !!}

                    </div>
                </div>
                <p>{!! link_to_route('users.show', 'Regresar', "", array('class' => 'btn btn-danger')) !!}</p>
            </div>             
        </div>
    </div>
@endsection

