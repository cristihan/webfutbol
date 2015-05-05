<div class="form-group">
    {!!Form::label('cargo', 'Cargo') !!}
    {!!Form::select('cargo', $cargos, null, ['class' => 'form-control', 'placeholder' => 'Introducir cargo']) !!}
</div>

<div class="form-group">
    {!!Form::label('categoria_id', 'Categoria') !!}
    {!!Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>
