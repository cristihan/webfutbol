@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Usuarios</div>               
            
                <div class="panel-body">
                    
                    @include('users.partials.messages')                   
                                        

                    {!!Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                    @include('users.partials.fields')
                    <button type="submit" class="btn btn-success">{{ trans('validation.attributes.guardar') }}</button>
                    {!!Form::close() !!}

                </div>
            </div>
            {!! link_to_route('users.index', 'Regresar al Index', "", array('class' => 'btn btn-danger')) !!}
        </div>
    </div>
</div>
@endsection

