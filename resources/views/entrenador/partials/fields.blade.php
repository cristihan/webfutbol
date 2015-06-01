<div class="form-group">
    {!!Form::label('cargo', trans('validation.attributes.cargo') ) !!}
    {!!Form::select('cargo', $cargos, null, ['class' => 'form-control', 'placeholder' => 'Introducir cargo']) !!}
</div>

<div class="form-group">
    {!!Form::label('categoria_id', trans('validation.attributes.categoria')) !!}
    {!!Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Introducir categoria']) !!}
</div>
