<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute debe ser aceptado.",
    "active_url"       => ":attribute no es una URL válida.",
    "after"            => ":attribute debe ser una fecha posterior a :date.",
    "alpha"            => ":attribute solo debe contener letras.",
    "alpha_dash"       => ":attribute solo debe contener letras, números y guiones.",
    "alpha_num"        => ":attribute solo debe contener letras y números.",
    "array"            => ":attribute debe ser un conjunto.",
    "before"           => ":attribute debe ser una fecha anterior a :date.",
    "between"          => [
        "numeric" => ":attribute tiene que estar entre :min - :max.",
        "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
        "string"  => ":attribute tiene que tener entre :min - :max caracteres.",
        "array"   => ":attribute tiene que tener entre :min - :max ítems.",
    ],
    "boolean"          => "El campo :attribute debe tener un valor verdadero o falso.",
    "confirmed"        => "La confirmación de :attribute no coincide.",
    "date"             => ":attribute no es una fecha válida.",
    "date_format"      => ":attribute no corresponde al formato :format.",
    "different"        => ":attribute y :other deben ser diferentes.",
    "digits"           => ":attribute debe tener :digits dígitos.",
    "digits_between"   => ":attribute debe tener entre :min y :max dígitos.",
    "email"            => ":attribute no es un correo válido",
    "exists"           => ":attribute es inválido.",
    "filled"           => "El campo :attribute es obligatorio.",
    "image"            => ":attribute debe ser una imagen.",
    "in"               => ":attribute es inválido.",
    "integer"          => ":attribute debe ser un número entero.",
    "ip"               => ":attribute debe ser una dirección IP válida.",
    "max"              => [
        "numeric" => ":attribute no debe ser mayor a :max.",
        "file"    => ":attribute no debe ser mayor que :max kilobytes.",
        "string"  => ":attribute no debe ser mayor que :max caracteres.",
        "array"   => ":attribute no debe tener más de :max elementos.",
    ],
    "mimes"            => ":attribute debe ser un archivo con formato: :values.",
    "min"              => [
        "numeric" => "El tamaño de :attribute debe ser de al menos :min.",
        "file"    => "El tamaño de :attribute debe ser de al menos :min kilobytes.",
        "string"  => ":attribute debe contener al menos :min caracteres.",
        "array"   => ":attribute debe tener al menos :min elementos.",
    ],
    "not_in"           => ":attribute es inválido.",
    "numeric"          => ":attribute debe ser numérico.",
    "regex"            => "El formato de :attribute es inválido.",
    "required"         => "El campo :attribute es obligatorio.",
    "required_if"      => "El campo :attribute es obligatorio cuando :other es :value.",
    "required_with"    => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_with_all" => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_without" => "El campo :attribute es obligatorio cuando :values no está presente.",
    "required_without_all" => "El campo :attribute es obligatorio cuando ninguno de :values estén presentes.",
    "same"             => ":attribute y :other deben coincidir.",
    "size"             => [
        "numeric" => "El tamaño de :attribute debe ser :size.",
        "file"    => "El tamaño de :attribute debe ser :size kilobytes.",
        "string"  => ":attribute debe contener :size caracteres.",
        "array"   => ":attribute debe contener :size elementos.",
    ],
    "timezone"         => "El :attribute debe ser una zona válida.",
    "unique"           => ":attribute ya ha sido registrado.",
    "url"              => "El formato :attribute es inválido.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'app_name' => "Escuela de Futbol",
        'email' => 'Correo Electronico',
        'password' => 'Contraseña',
        'contraseña' => 'Contraseña',
        'inicio' => "INICIO",
        'inscripcion_escuela' => 'INSCRIPCION ESCUELA',
        'categorias' => 'CATEGORIAS',
        'entrenamiento' => 'ENTRENAMIENTO',
        'competicion' => 'COMPETICION',
        'entrenadores' => 'ENTRENADORES',
        'partidos' => 'PARTIDOS',
        'estadisticas' => 'ESTADÍSTICAS',
        'actualidad' => 'ACTUALIDAD',
        'inscripcion' => 'INSCRIPCIÓN ESCUELA FUTBOL BARCELONA',
        'inscribite' => 'INSCRIBITE',
        'ubicacion' =>  'UBICACIÓN',
        'noticias' => 'ÚLTIMAS NOTICIAS',
        'noticia_1' => 'Partido contra Logroño, Alevines a favor 2-1',
        'noticia_2' => 'Entrega de premios categoria junio',
        'legalidad' => 'Nota legal',
        'accesibilidad' => 'Accesibilidad',
        'contacto' => 'Contacta con nosotros',
        'usuarios' => 'Usuarios',
        'nuevo_usuario' => 'Nuevo Usuario',
        'mostrar_usuarios' => 'Mostrar Usuarios',
        'nombre' => 'Nombre',
        'email_2' => 'Email',
        'tipo' => 'Tipo',
        'apellidos' => 'Apellidos',
        'telefono' => 'Telefono',
        'direccion' => 'Dirección',
        'cp' => 'CP',
        'codigo_postal' => 'Código postal',
        'localidad' => 'Localidad',
        'titular' => 'Titular',
        'dni' => 'dni',
        'habilidad' => 'Habilidad',
        'posicion' => 'Posición',
        'perfil' => 'Perfil',
        'editar_perfil' => 'Editar Perfil',
        'datos_entrenador' => 'Datos de Entrenador',
        'agregar_entrenador' => 'Agregar Datos de Entrenador',
        'cargo' => 'Cargo',
        'categoria' => 'Categoria',
        'nuevo_entrenador' => 'Nuevo Entrenador',
        'guardar' => 'Guardar',
        'modificar_entrenador' => 'Modificar Datos de Entrenador',
        'editar_perfil' => 'Editar Perfil Usuarios',
        'actualizar_perfil' => 'Actualizar Perfil Usuario',
        'acciones' => 'Acciones',
        'editar' => 'Editar',
        'eliminar' => 'Eliminar',
        'mostrar' => 'Mostrar',
        'errores' => 'Por Favor Corrige los errores',
        'tipo_usuario' => 'Tipo de Usuaruio',
        'nuevo_partido' => 'Nuevo Partido',
        'listado_partido' => 'Listado de Partidos',
        'mostrar_partido' => 'Mostrar Partidos',
        'dato_partido' => 'Datos De Partido',
        'actualizar_partido' => 'Actualizar Datos Del Partido',
        'mostrar_partido' => 'Mostrar Datos del Partido',
        'rival' => 'rival',
        'campo' => 'campo',
        'estado' => 'estado',
        'fecha' => 'fecha',
        'jornada' => 'jornada',
        'categoria' => 'categoria',
        'editar_estadisticas' => 'Editar Estadísticas',
        'goles_favor' => 'Goles_Favor',
        'goles_contra' => 'Goles_En_Contra',
        'minuto_jugado' => 'Minutos Jugados',
        'autogol' => 'Autogol',
        'tarjeta_amarilla' => 'Tarjetas Amarillas',
        'tarjeta_roja' => 'Tarjetas Rojas',
        'convocado' => 'Convocados',
        'convocatoria' => 'Editar convocatoria de jugadores',
        'estadistica_jugador' => 'Estadísticas De Jugadores',
        'editar_estadistica_jugador' => 'Editar Estadísticas de jugadores',
        'visilocal' => 'Visitante_Local',
        'nombre_campo' => 'Nombre de Campo',
        'nombre_rival' => 'Nombre del Rival',
        'eliminar_partido' => 'Eliminar Datos del Partido',
        'eliminar_Usuario' => 'Eliminar Datos del Usuario',
        
        

        ],
];
