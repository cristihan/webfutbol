@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Padre</div>               

                <div class="panel-body">
                    
<!--                    @include('users.partials.messages')                   -->
                                        

                    {!!Form::open(['route' => 'padres.store', 'method' => 'POST']) !!}
                    @include('padres.partials.fields')
                    <button type="submit" class="btn btn-default">Crear Padre</button>
                    {!!Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

