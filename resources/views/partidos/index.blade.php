@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('validation.attributes.mostrar_partido') }}</div>               
                
                @if (Session::has('message'))

                <p class="alert alert-success">{{Session::get('message')}}</p>
                @endif                 
                
                <div class="panel-body">
                <a class="btn btn-info" href="{{route('partidos.create')}}" role="button">{{ trans('validation.attributes.nuevo_partido') }}</a><br>    
                    <h1>{{ trans('validation.attributes.listado_partido') }}</h1><br>                    
                   
                    @include('partidos.partials.table')                    
                      {!! $partidos->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

{!!Form::open(['route' => ['partidos.destroy', ':PARTIDO_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
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
            var url = form.attr('action').replace(':PARTIDO_ID', id);
            var data = form.serialize();
            row.fadeOut();
            $.post(url, data, function(result) {
                alert(result.message);
            }).fail(function() {
                alert('Los datos del partido no fue eliminado');
                row.show();
            });
        });
    });
</script>
@endsection


