     <div class="form-group">
                        {!!Form::label('email', 'Correo Electronico') !!};
                        {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introducir email']) !!}                          
                    </div>
                    <div class="form-group">
                        {!!Form::label('password', 'Contraseña') !!};
                        {!!Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('name', 'Nombre') !!};
                        {!!Form::text('name', null, ['class' => 'form-control']) !!}

                    </div>                    
                    <div class="form-group">
                        {!!Form::label('type', 'Tipo de Usuario') !!};
                        {!!Form::select('type', ['' => 'Seleccione tipo', 'entrenador' => 'Entrenador', 'administrador' => 'Administrador'], null, ['class' => 'form-control']) !!}

                    </div>