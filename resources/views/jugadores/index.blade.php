@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Jugadores</div>               
                     
                @if (Session::has('message'))

                <p class="alert alert-success">{{Session::get('message')}}</p>
                @endif                

                <div class="panel-body">                    
                    <a class="btn btn-info" href="{{route('jugadores.create')}}" role="button">Nuevo Jugador</a> 
                   
                   <p>Hay {{ $jugadores->total()}} Jugadores</p>

                     @include('jugadores.partials.table')
                     {!! $jugadores->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

{!!Form::open(['route' => ['jugadores.destroy', ':JUGADOR_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
{!!Form::close() !!}

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.btn-delete').click(function(e) {
            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#form-delete');
            var url = form.attr('action').replace(':JUGADOR_ID', id);
            var data = form.serialize();
            row.fadeOut();
            $.post(url, data, function(result) {
                alert(result.message);
            }).fail(function() {
                alert('El usuario no fue eliminado');
                row.show();
            });
        });
    });
</script>
@endsection


