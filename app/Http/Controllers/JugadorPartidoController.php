<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Jugador;
use webfutbol\Partido;
use webfutbol\JugadorPartido;

use Illuminate\Http\Request;

class JugadorPartidoController extends Controller {

	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $partido = Partido::findOrFail($id);
            $jugadores = Jugador::all();

                return view('jugador_partido.edit', compact('partido', 'jugadores'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
            $partido = Partido::findOrFail($id);
            $jugadores = $request->get('jugador_id');

            $partido->jugadores()->attach($jugadores);

            return redirect()->back()->with('message', 'Cambios guardados');
	}

	

}