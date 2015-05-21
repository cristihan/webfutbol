<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;

use webfutbol\Jugador;
use webfutbol\Entrenamiento;
use webfutbol\EntrenamientoJugador;

use Illuminate\Http\Request;

class EntrenamientoJugadorController extends Controller {

	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $entrenamiento = Entrenamiento::findOrFail($id);
            $jugadores = Jugador::all();

                return view('entrenamiento_jugador.edit', compact('entrenamiento', 'jugadores'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
