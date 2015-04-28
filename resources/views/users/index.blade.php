@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('users.create')}}" role="button">Nuevo Usuario</a> 
                    
                   <p>Hay {{ $users->total()}} Usuarios</p>
<!--                  <p>Usted esta en la pagina {{ $users->currentPage()}}</p>-->
                   @include('users.partials.table')
                     {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

