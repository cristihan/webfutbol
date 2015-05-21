<div class="form-group">
     {!!Form::label('fecha', 'Fecha') !!}
     {!!Form::text('fecha', null, ['class' => 'form-control', 'placeholder' => 'Introducir fecha Entrenamiento']) !!}
</div>   

<div class="form-group">
    {!!Form::label('campo', 'Campo De Entrenamiento') !!}
    {!!Form::select('campo', $campos, null, ['class' => 'form-control', 'placeholder' => 'Introducir Campo Entrenamiento']) !!}
</div>

<div class="form-group">
    {!!Form::label('dias', 'Dias Entrenamiento') !!}
    {!!Form::select('dias', $dias, null, ['class' => 'form-control', 'placeholder' => 'Introducir Dias Entrenamiento']) !!}
</div>

<div class="form-group">
    {!!Form::label('categoria_id', 'Categoria') !!}
    {!!Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>

                   