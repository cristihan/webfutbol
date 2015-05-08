<div class="form-group">
    {!!Form::label('rival', 'Nombre Del Rival') !!};
    {!!Form::text('rival', null, ['class' => 'form-control', 'placeholder' => 'Introducir nombre de rival']) !!}
</div>

<div class="form-group">
    {!!Form::label('campo', 'Nombre De Campo') !!};
    {!!Form::text('campo', null, ['class' => 'form-control', 'placeholder' => 'Introducir Campo']) !!}
</div>

<div class="form-group">
    {!!Form::label('estado', 'Visitante_Local') !!};
    {!!Form::select('estado', ['' => 'Seleccione Estado', 'local' => 'Local', 'visitante' => 'Visitante'], null, ['class' => 'form-control']) !!} 
    
</div>

<div class="form-group">
    {!!Form::label('fecha', 'Fecha') !!};
    {!!Form::text('fecha', null, ['class' => 'form-control', 'placeholder' => 'Introducir fecha']) !!}
</div>

<div class="form-group">
    {!!Form::label('jornada', 'Jornada') !!};
    {!!Form::text('jornada', null, ['class' => 'form-control', 'placeholder' => 'Introducir Jornada']) !!}
</div>


<div class="form-group">
    {!!Form::label('categoria_id', 'Categoria') !!}
    {!!Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>