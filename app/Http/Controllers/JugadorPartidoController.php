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
	public function update(Request $request, $id)
        {
        $partido   = Partido::findOrFail($id);
        $jugadores = $request->get('jugador_id');
        $titulares = $request->get('titular');
        $data      = [];

        if (is_array($jugadores) AND is_array($titulares)) {
            foreach ($jugadores as $key => $id) {
                $value = in_array($id, $titulares) ? 1 : 0;
                $data[$id] = ['titular' => $value];
            }
        } elseif (!is_null($jugadores)) {
            $data = $jugadores;
        }

        $partido->jugadores()->sync($data);

        return redirect()->back()->with('message', 'Cambios guardados');
        }
        
        
        public function editJugadores($id)
	{
            $partido = Partido::findOrFail($id);
            $jugadores = Jugador::all();

                return view('jugador_partido.edit_jugadores', compact('partido', 'jugadores'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateJugadores(Request $request, $id)
        {
        

        return redirect()->back()->with('message', 'Cambios guardados');
        }

}