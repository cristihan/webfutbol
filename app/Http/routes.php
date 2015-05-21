<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'AppController@index
Route::get('/', ['as' => 'app.index', 'uses'=>'AppController@index']);
Route::get('categorias', 'categoriasController@index');


Route::get('home', 'HomeController@index');

Route::resource('users', 'UsersController');
Route::resource('categorias', 'CategoriasController');
Route::resource('perfil', 'PerfilesController', ['only'=>['edit', 'update']]);
Route::resource('padres', 'PadresController');
Route::resource('entrenamientos', 'EntrenamientosController');

Route::group(['prefix' => 'entrenador/'], function () {

    Route::get('create/{user}', [
        'as'    => 'entrenador.create',
        'uses'  => 'EntrenadorController@create'
    ]);

    Route::post('store', [
        'as'    => 'entrenador.store',
        'uses'  => 'EntrenadorController@store'
    ]);

    Route::get('edit/{entrenador}', [
        'as'    => 'entrenador.edit',
        'uses'  => 'EntrenadorController@edit'
    ]);

    Route::put('update/{entrenador}', [
        'as'    => 'entrenador.update',
        'uses'  => 'EntrenadorController@update'
    ]);

});

Route::resource('partidos', 'PartidosController');
Route::get('partidos/edit/estadisticas/{partidos}', [
    'as'   => 'partidos.edit.estadisticas',
    'uses' => 'PartidosController@editEstadisticas',
]);
Route::put('partidos/edit/estadisticas/{partidos}', [
   'as'   => 'partidos.update.estadisticas',
   'uses' => 'PartidosController@updateEstadisticas',
]);

Route::resource('jugadores', 'JugadoresController');

Route::get('partidos/{partidos}/convocar', [
    'as'    => 'partidos.convocar',
    'uses'  => 'JugadorPartidoController@edit'
]);

Route::post('partidos/{partidos}/convocar', [
    'as'    => 'partidos.convocar.update',
    'uses'  => 'JugadorPartidoController@update'
]);

Route::get('partidos/jugadores/{partidos}/estadisticas', [
    'as'    => 'partidos.jugadores.estadisticas',
    'uses'  => 'JugadorPartidoController@editEstadisticasJugadores'
]);

Route::post('partidos/jugadores/{partidos}/estadisticas', [
    'as'    => 'partidos.jugadores.estadisticas.update',
    'uses'  => 'JugadorPartidoController@updateEstadisticasJugadores'
]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
