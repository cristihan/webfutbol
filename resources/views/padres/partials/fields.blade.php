<div class="form-group">
    {!!Form::label('nombre', 'Nombre') !!};
    {!!Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Introducir nombre']) !!}
</div>

<div class="form-group">
    {!!Form::label('apellidos', 'Apellidos') !!};
    {!!Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Introducir apellidos']) !!}
</div>

<div class="form-group">
    {!!Form::label('telefono', 'Telefono') !!};
    {!!Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Introducir telefono']) !!}
</div>   

<div class="form-group">
    {!!Form::label('email', 'Correo Electronico') !!};
    {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introducir email']) !!}                          
</div>
