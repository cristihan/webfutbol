@extends('layout.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('validation.attributes.usuarios') }}</div>
                
                 @if (Session::has('message'))

                <p class="alert alert-success">{{Session::get('message')}}</p>
                @endif

                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('users.create')}}" role="button">{{ trans('validation.attributes.nuevo_usuario') }}</a> 
                    
                   <p>Hay {{ $users->total()}} {{ trans('validation.attributes.usuarios') }}</p>
                     @include('users.partials.table')
                     {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

{!!Form::open(['route' => ['users.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
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
            var url = form.attr('action').replace(':USER_ID', id);
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

