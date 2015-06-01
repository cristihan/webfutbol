     <div class="form-group">
                        {!!Form::label('email', trans('validation.attributes.email')) !!};
                        {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introducir email']) !!}                          
                    </div>
                    <div class="form-group">
                        {!!Form::label('password', trans('validation.attributes.contraseña')) !!};
                        {!!Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('name', trans('validation.attributes.nombre')) !!};
                        {!!Form::text('name', null, ['class' => 'form-control']) !!}

                    </div>                    
                    <div class="form-group">
                        {!!Form::label('type', trans('validation.attributes.tipo_usuario')) !!};
                        {!!Form::select('type', ['' => 'Seleccione tipo', 'entrenador' => 'Entrenador', 'administrador' => 'Administrador'], null, ['class' => 'form-control']) !!}

                    </div>