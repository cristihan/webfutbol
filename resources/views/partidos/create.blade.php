@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Partido</div>

                    <div class="panel-body">                  
                                              
                        {!!Form::open(['route' =>'partidos.store', 'method' => 'POST']) !!}
                     
                        @include('partidos.partials.fields')
                        <button type="submit" class="btn btn-default">Crear Partido</button>
                        {!!Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

