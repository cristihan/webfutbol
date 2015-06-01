
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
    <p>{{ trans('validation.attributes.errores') }}</p>
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error}}</li>
        @endforeach
    </ul>
    </div>
    @endif
