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
    {!!Form::label('goles_a_favor', 'Goles a Favor') !!};
    {!!Form::text('goles_a_favor', null, ['class' => 'form-control', 'placeholder' => 'Introducir Goles a Favor']) !!}
</div>

<div class="form-group">
    {!!Form::label('goles_en_contra', 'Goles en Contra') !!};
    {!!Form::text('goles_en_contra', null, ['class' => 'form-control', 'placeholder' => 'Introducir Goles en Contra']) !!}
</div>

<div class="form-group">
    {!!Form::label('tarjetas_amarillas', 'Tarjetas Amarillas') !!};
    {!!Form::text('tarjetas_amarillas', null, ['class' => 'form-control', 'placeholder' => 'Introducir Tarjetas Amarillas']) !!}
</div>

<div class="form-group">
    {!!Form::label('tarjetas_rojas', 'Tarjetas Rojas') !!};
    {!!Form::text('tarjetas_rojas', null, ['class' => 'form-control', 'placeholder' => 'Introducir Tarjetas Rojas']) !!}
</div>

<div class="form-group">
    {!!Form::label('categoria_id', 'Categoria') !!}
    {!!Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>