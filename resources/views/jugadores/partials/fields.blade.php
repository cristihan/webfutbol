<div class="form-group">
    {!!Form::label('nombre', 'Nombre') !!};
    {!!Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Introducir nombre de jugador']) !!}
</div>

<div class="form-group">
    {!!Form::label('apellidos', 'Apellidos') !!};
    {!!Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Introducir apellidos de jugador']) !!}
</div>

<div class="form-group">
    {!!Form::label('dni', 'DNI') !!};
    {!!Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Introducir dni']) !!}
</div>

<div class="form-group">
    {!!Form::label('fecha_nacimiento', 'Fecha De Nacimiento') !!};
    {!!Form::text('fecha_nacimiento', null, ['class' => 'form-control', 'placeholder' => 'Introducir fecha']) !!}
</div>

<div class="form-group">
    {!!Form::label('telefono', 'Telefono') !!};
    {!!Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Introducir Telefono']) !!}
</div>

<div class="form-group">
    {!!Form::label('email', 'Email') !!};
    {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introducir Email']) !!}
</div>

<div class="form-group">
    {!!Form::label('direccion', 'Direccion') !!};
    {!!Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Introducir Direccion']) !!}
</div>

<div class="form-group">
    {!!Form::label('cp', 'Codigo Postal') !!};
    {!!Form::text('cp', null, ['class' => 'form-control', 'placeholder' => 'Introducir CP']) !!}
</div>

<div class="form-group">
    {!!Form::label('localidad', 'Localidad') !!};
    {!!Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Localidad']) !!}
</div>

<div class="form-group">
    {!!Form::label('habilidad', 'Habilidad Jugador') !!}
    {!!Form::select('habilidad', $habilidades, null, ['class' => 'form-control', 'placeholder' => 'Introducir Habilidad']) !!}
</div>

<div class="form-group">
    {!!Form::label('posicion', 'Posicion Jugador') !!}
    {!!Form::select('posicion', $posiciones, null, ['class' => 'form-control', 'placeholder' => 'Introducir Posicion']) !!}
</div>


<div class="form-group">
    {!!Form::label('categoria_id', 'Categoria') !!}
    {!!Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>

<div class="form-group">
    {!!Form::label('padre_id', 'Padre') !!}
    {!!Form::select('padre_id', $padres, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>