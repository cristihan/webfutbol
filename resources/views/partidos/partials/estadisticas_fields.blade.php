<div class="form-group">
    {!!Form::label('goles_a_favor', trans('validation.attributes.goles_favor')) !!};
    {!!Form::text('goles_a_favor', null, ['class' => 'form-control', 'placeholder' => 'Introducir Goles a Favor']) !!}
</div>

<div class="form-group">
    {!!Form::label('goles_en_contra', trans('validation.attributes.goles_contra')) !!};
    {!!Form::text('goles_en_contra', null, ['class' => 'form-control', 'placeholder' => 'Introducir Goles en Contra']) !!}
</div>

<div class="form-group">
    {!!Form::label('tarjetas_amarillas', trans('validation.attributes.tarjeta_amarilla')) !!};
    {!!Form::text('tarjetas_amarillas', null, ['class' => 'form-control', 'placeholder' => 'Introducir Tarjetas Amarillas']) !!}
</div>

<div class="form-group">
    {!!Form::label('tarjetas_rojas', trans('validation.attributes.tarjeta_roja')) !!};
    {!!Form::text('tarjetas_rojas', null, ['class' => 'form-control', 'placeholder' => 'Introducir Tarjetas Rojas']) !!}
</div>