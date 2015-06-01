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

    "accepted"         => ":attribute ha de ser acceptat.",
    "active_url"       => ":attribute no és un URL vàlid.",
    "after"            => ":attribute ha de ser una data posterior a :date.",
    "alpha"            => ":attribute només pot contenir lletres.",
    "alpha_dash"       => ":attribute només por contenir lletres, números i guions.",
    "alpha_num"        => ":attribute només pot contenir lletres i números.",
    "array"            => ":attribute ha de ser un conjunt.",
    "before"           => ":attribute ha de ser una data anterior a :date.",
    "between"          => [
        "numeric" => ":attribute ha d'estar entre :min - :max.",
        "file"    => ":attribute ha de pesar entre :min - :max kilobytes.",
        "string"  => ":attribute ha de tenir entre :min - :max caràcters.",
        "array"   => ":attribute ha de tenir entre :min - :max ítems.",
    ],
    "boolean"          => "El camp :attribute ha de ser veritat o fals",
    "confirmed"        => "La confirmació de :attribute no coincideix.",
    "date"             => ":attribute no és una data vàlida.",
    "date_format"      => ":attribute no correspon al format :format.",
    "different"        => ":attribute i :other han de ser diferents.",
    "digits"           => ":attribute ha de tenir :digits digits.",
    "digits_between"   => ":attribute ha de tenir entre :min i :max digits.",
    "email"            => ":attribute no és un e-mail vàlid",
    "exists"           => ":attribute és invàlid.",
    "filled"           => "El camp :attribute és obligatori.",
    "image"            => ":attribute ha de ser una imatge.",
    "in"               => ":attribute és invàlid",
    "integer"          => ":attribute ha de ser un nombre enter.",
    "ip"               => ":attribute ha de ser una adreça IP vàlida.",
    "max"              => [
        "numeric" => ":attribute no ha de ser major a :max.",
        "file"    => ":attribute no ha de ser més gran que :max kilobytes.",
        "string"  => ":attribute no ha de ser més gran que :max characters.",
        "array"   => ":attribute no ha de tenir més de :max ítems.",
    ],
    "mimes"            => ":attribute ha de ser un arxiu amb format: :values.",
    "min"              => [
        "numeric" => "El tamany de :attribute ha de ser d'almenys :min.",
        "file"    => "El tamany de :attribute ha de ser d'almenys :min kilobytes.",
        "string"  => ":attribute ha de contenir almenys :min caràcters.",
        "array"   => ":attribute ha de tenir almenys :min ítems.",
    ],
    "not_in"           => ":attribute és invàlid.",
    "numeric"          => ":attribute ha de ser numèric.",
    "regex"            => "El format de :attribute és invàlid.",
    "required"         => "El camp :attribute és obligatori.",
    "required_if"      => "El camp :attribute és obligatori quan :other és :value.",
    "required_with"    => "El camp :attribute és obligatori quan :values és present.",
    "required_with_all" => "El camp :attribute és obligatori quan :values és present.",
    "required_without" => "El camp :attribute és obligatori quan :values no és present.",
    "required_without_all" => "El camp :attribute és obligatori quan cap dels :values estan presents.",
    "same"             => ":attribute i :other han de coincidir.",
    "size"             => [
        "numeric" => "El tamany de :attribute ha de ser :size.",
        "file"    => "El tamany de :attribute ha de ser :size kilobytes.",
        "string"  => ":attribute ha de contenir :size caràcters.",
        "array"   => ":attribute ha de contenir :size ítems.",
    ],
    "timezone"         => "El camp :attribute ha de ser una zona vàlida.",
    "unique"           => ":attribute ja ha estat registrat.",
    "url"              => "El format :attribute és invàlid.",

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
        'app_name' => "Escola d'futbol",
        'email' => 'Correu Electrònic',
        'contraseña' => 'Clau',
        'inicio' => "INICI",
        'inscripcion_escuela' => 'INSCRIPCIÓ ESCOLA',
        'categorias' => 'CATEGORIES',
        'entrenamiento' => 'ENTRENAMENT',
        'competicion' => 'COMPETICIÓ',
        'entrenadores' => 'ENTRENADORS',
        'partidos' => 'PARTITS',
        'estadisticas' => 'ESTADÍSTIQUES',
        'actualidad' => 'ACTUALITAT',
        'inscripcion' => 'INSCRIPCIÓ ESCOLA FUTBOL BARCELONA',
        'inscribite' => 'INSCRIURE',
        'ubicacion' =>  'UBICACIÓ',
        'noticias' => 'ÚLTIMES NOTÍCIES',
        'noticia_1' => 'Partit contra Logronyo, Alevins a favor 2-1',
        'noticia_2' => 'Lliurament de premis categoria juny',
        'legalidad' => 'Nota legal',
        'accesibilidad' => 'Accessibilitat',
        'contacto' => 'Contacta amb nosaltres',
        'usuarios' => 'Usuaris',
        'nuevo_usuario' => 'Nou Usuari',
        'mostrar_usuarios' => 'Mostra Usuaris',
        'nombre' => 'Nom',
        'email_2' => 'Email',
        'tipo' => 'Tipus',
        'apellidos' => 'Cognoms',
        'telefono' => 'Telèfon',
        'direccion' => 'Direcció',
        'cp' => 'Codi Postal',
        'codigo_postal' => 'Codi postal',
        'localidad' => 'Localitat',
        'titular' => 'Titular',
        'dni' => 'dni',
        'habilidad' => 'habilitat ',
        'posicion' => 'Posició',
        'perfil' => 'Perfil',
        'editar_perfil' => 'Editar Perfil',
        'datos_entrenador' => "dades d'entrenador",
        'agregar_entrenador' => "Afegir Dades d'Entrenador",
        'cargo' => 'Càrrec',
        'categoria' => 'Categoria',
        'nuevo_entrenador' => 'Nou Entrenador',
        'guardar' => 'Guardar',
        'modificar_entrenador' => "Modificar Dades d'Entrenador",
        'editar_perfil' => 'Edita Perfil Usuaris',
        'actualizar_perfil' => 'Actualitzar Perfil Usuari',
        'acciones' => 'Accions',
        'editar' => 'Editar',
        'eliminar' => 'Eliminar',
        'mostrar' => 'Mostrar',
        'errores' => 'Per favor Corregeix els errors',
        'tipo_usuario' => "Tipus d'Usuari",
        'nuevo_partido' => 'Nou Partit',
        'listado_partido' => 'Llistat de Partits',
        'mostrar_partido' => 'Mostrar Partits',
        'dato_partido' => "Dades D'Partit",
        'actualizar_partido' => 'Actualitzar Dades Del Partit',
        'mostrar_partido' => 'Mostra Dades del Partit',
        'rival' => 'Rival',
        'campo' => 'Camp',
        'estado' => 'Estat',
        'fecha' => 'Data',
        'jornada' => 'Jornada',
        'categoria' => 'Categoria',
        'editar_estadisticas' => 'Edita Estadístiques',
        'goles_favor' => 'Gols_Favor',
        'goles_contra' => 'Gols_en_Contra',
        'minuto_jugado' => 'Minuts Jugats',
        'autogol' => 'Autogol',
        'tarjeta_amarilla' => 'Targetes Grogues',
        'tarjeta_roja' => 'Targetes Vermelles',
        'convocado' => 'Convocats',
        'convocatoria' => 'Edita convocatòria de jugadors',
        'estadistica_jugador' => "Estadístiques D'Jugadors", 
        'editar_estadistica_jugador' => 'Estadístiques de jugadors',
        'visilocal' => 'Visitant_Local',
        'nombre_campo' => 'Nom de Camp',
        'nombre_rival' => 'Nom del Rival',
        'eliminar_partido' => 'Eliminar dades Partit',
        'eliminar_Usuario' => 'Eliminar Dades Usuari',
        
        
    ],

];
