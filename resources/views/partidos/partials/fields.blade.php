<div class="form-group">
    {!!Form::label('rival', trans('validation.attributes.nombre_rival')) !!};
    {!!Form::text('rival', null, ['class' => 'form-control', 'placeholder' => 'Introducir nombre de rival']) !!}
</div>

<div class="form-group">
    {!!Form::label('campo', trans('validation.attributes.nombre_campo')) !!};
    {!!Form::text('campo', null, ['class' => 'form-control', 'placeholder' => 'Introducir Campo']) !!}
</div>

<div class="form-group">
    {!!Form::label('estado', trans('validation.attributes.visilocal')) !!};
    {!!Form::select('estado', ['' => 'Seleccione Estado', 'local' => 'Local', 'visitante' => 'Visitante'], null, ['class' => 'form-control']) !!}     
</div>

<div class="form-group">
    {!!Form::label('fecha', trans('validation.attributes.fecha')) !!};
    {!!Form::text('fecha', null, ['class' => 'form-control', 'placeholder' => 'Introducir fecha']) !!}
</div>

<div class="form-group">
    {!!Form::label('jornada', trans('validation.attributes.jornada')) !!};
    {!!Form::text('jornada', null, ['class' => 'form-control', 'placeholder' => 'Introducir Jornada']) !!}
</div>


<div class="form-group">
    {!!Form::label('categoria_id', trans('validation.attributes.categoria')) !!}
    {!!Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>