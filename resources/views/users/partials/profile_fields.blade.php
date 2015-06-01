                      <div class="form-group">
                            {!!Form::label('nombre', trans('validation.attributes.nombre')) !!};
                            {!!Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Introducir nombre']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('apellidos', trans('validation.attributes.apellidos')) !!};
                            {!!Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Introducir apellidos']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('telefono', trans('validation.attributes.telefono')) !!};
                            {!!Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Introducir telefono']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('direccion', trans('validation.attributes.direccion')) !!};
                            {!!Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Introducir dirección']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('cp', trans('validation.attributes.codigo_postal')) !!};
                            {!!Form::text('cp', null, ['class' => 'form-control', 'placeholder' => 'Introducir codigo postal']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('localidad', trans('validation.attributes.localidad')) !!};
                            {!!Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Introducir localidad']) !!}
                        </div>