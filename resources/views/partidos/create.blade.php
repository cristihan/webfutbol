@extends('layout.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Datos De Partido</div>

                    <div class="panel-body">                  
                                              
                        {!!Form::open(['route' =>'partidos.store', 'method' => 'POST']) !!}
                     
                        @include('partidos.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>
                        {!!Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

