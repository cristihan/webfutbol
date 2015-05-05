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
                            {!!Form::label('direccion', 'Dirección') !!};
                            {!!Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Introducir dirección']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('cp', 'Código postal') !!};
                            {!!Form::text('cp', null, ['class' => 'form-control', 'placeholder' => 'Introducir codigo postal']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('localidad', 'Localidad') !!};
                            {!!Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Introducir localidad']) !!}
                        </div>