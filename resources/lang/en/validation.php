<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "The :attribute must be accepted.",
	"active_url"           => "The :attribute is not a valid URL.",
	"after"                => "The :attribute must be a date after :date.",
	"alpha"                => "The :attribute may only contain letters.",
	"alpha_dash"           => "The :attribute may only contain letters, numbers, and dashes.",
	"alpha_num"            => "The :attribute may only contain letters and numbers.",
	"array"                => "The :attribute must be an array.",
	"before"               => "The :attribute must be a date before :date.",
	"between"              => [
		"numeric" => "The :attribute must be between :min and :max.",
		"file"    => "The :attribute must be between :min and :max kilobytes.",
		"string"  => "The :attribute must be between :min and :max characters.",
		"array"   => "The :attribute must have between :min and :max items.",
	],
	"boolean"              => "The :attribute field must be true or false.",
	"confirmed"            => "The :attribute confirmation does not match.",
	"date"                 => "The :attribute is not a valid date.",
	"date_format"          => "The :attribute does not match the format :format.",
	"different"            => "The :attribute and :other must be different.",
	"digits"               => "The :attribute must be :digits digits.",
	"digits_between"       => "The :attribute must be between :min and :max digits.",
	"email"                => "The :attribute must be a valid email address.",
	"filled"               => "The :attribute field is required.",
	"exists"               => "The selected :attribute is invalid.",
	"image"                => "The :attribute must be an image.",
	"in"                   => "The selected :attribute is invalid.",
	"integer"              => "The :attribute must be an integer.",
	"ip"                   => "The :attribute must be a valid IP address.",
	"max"                  => [
		"numeric" => "The :attribute may not be greater than :max.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		"string"  => "The :attribute may not be greater than :max characters.",
		"array"   => "The :attribute may not have more than :max items.",
	],
	"mimes"                => "The :attribute must be a file of type: :values.",
	"min"                  => [
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "The :attribute must be at least :min characters.",
		"array"   => "The :attribute must have at least :min items.",
	],
	"not_in"               => "The selected :attribute is invalid.",
	"numeric"              => "The :attribute must be a number.",
	"regex"                => "The :attribute format is invalid.",
	"required"             => "The :attribute field is required.",
	"required_if"          => "The :attribute field is required when :other is :value.",
	"required_with"        => "The :attribute field is required when :values is present.",
	"required_with_all"    => "The :attribute field is required when :values is present.",
	"required_without"     => "The :attribute field is required when :values is not present.",
	"required_without_all" => "The :attribute field is required when none of :values are present.",
	"same"                 => "The :attribute and :other must match.",
	"size"                 => [
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	],
	"unique"               => "The :attribute has already been taken.",
	"url"                  => "The :attribute format is invalid.",
	"timezone"             => "The :attribute must be a valid zone.",

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
            'app_name' => "futbol school",
            'email' => 'Email',
            'contraseña' => 'Password',
            'inicio' => "HOME",
            'inscripcion_escuela' => ' SCHOOL REGISTRATION',
            'categorias' => 'CATEGORIES',
            'entrenamiento' => 'TRAINING',
            'competicion' => 'COMPETITION',
            'entrenadores' => 'COACH',
            'partidos' => 'MATCHES',
            'estadisticas' => 'STATISTICS',
            'actualidad' => 'CURRENT NEWS',
            'inscripcion' => 'BARCELONA FOOTBALL SCHOOL ENROLLMENT',
            'inscribite' => 'SIGN UP',
            'ubicacion' =>  'LOCATION',
            'noticias' => 'BREAKING NEWS',
            'noticia_1' => 'Match against Logroño, fry for 2-1',
            'noticia_2' => 'June awards category',
            'legalidad' => 'Legal Disclaimer',
            'accesibilidad' => 'Accessibility',
            'contacto' => 'Contact Us',
            'usuarios' => 'Users',
            'nuevo_usuario' => 'New User',
            'mostrar_usuarios' => 'Show Users',
            'nombre' => 'Name',
            'email_2' => 'Email',
            'tipo' => 'Type',
            'apellidos' => 'Last name',
            'telefono' => 'Telephone',
            'direccion' => 'Adrdress',
            'cp' => 'Postal Code',
            'codigo_postal' => 'Postal Code',
            'localidad' => 'Location',
            'titular' => 'regular player',
            'dni' => 'dni',
            'habilidad' => 'skill player',
            'posicion' => 'player position',
            'perfil' => 'Profile',
            'editar_perfil' => 'Edit Profile',
            'datos_entrenador' => 'Coach Data',
            'agregar_entrenador' => 'Add Coach Facts',
            'cargo' => 'Appointment',
            'categoria' => 'Category',
            'nuevo_entrenador' => 'new Coach',
            'guardar' => 'Save',
            'modificar_entrenador' => 'Change Data Trainer',
            'editar_perfil' => 'Edit User Profile',
            'actualizar_perfil' => 'Update User Profile',
            'acciones' => 'Actions',
            'editar' => 'Edit',
            'eliminar' => 'Remove',
            'mostrar' => 'Show',
            'errores' => 'Please correct the errors',
            'tipo_usuario' => 'User Type',
            'nuevo_partido' => 'new Match',
            'listado_partido' => 'List of matches',
            'mostrar_partido' => 'Show Matches',
            'dato_partido' => 'Data Match',
            'actualizar_partido' => 'Update Match',
            'mostrar_partido' => 'Show details Match',
            'rival' => 'Enemy Team',
            'campo' => 'Field',
            'estado' => 'visitor',
            'fecha' => 'Date',
            'jornada' => 'Next Natch',
            'categoria' => 'Category',
            'editar_estadisticas' => 'Edit Statistics',
            'goles_favor' => 'Goals_Scored',
            'goles_contra' => 'Goals_Against',
            'minuto_jugado' => 'Minutes Played',
            'autogol' => 'Own goal',
            'tarjeta_amarilla' => 'Yellow_Cards',
            'tarjeta_roja' => 'Red_Cards',
            'convocado' => 'Convened',
            'convocatoria' => 'Edit call for players',
            'estadistica_jugador' => 'Player Stats',
            'editar_estadistica_jugador' => 'Edit Player Stats',
            'visilocal' => 'Visitor_Local',
            'nombre_campo' => 'Field Name',
            'nombre_rival' => "opponent's name",
            'eliminar_partido' => 'Remove Match',
            'eliminar_Usuario' => 'remove User',
            
            
            
            
            
            

        ],

];
