<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;

use Illuminate\Http\Request;
use webfutbol\Categoria;
use webfutbol\Entrenador;

class EntrenadorController extends Controller {
    
    
        private $categorias;

        private $cargos = [
            'primer_entrenador'  => 'Primer entrenador',
            'segundo_entrenador' => 'Segundo entrenador',
         ];

        public function __construct()
        {
            $this->categorias = Categoria::lists('nombre', 'id');
        }

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            {
        return view('entrenador.create', compact('user'))->with([
            'categorias' => $this->categorias,
            'cargos'     => $this->cargos,
        ]);
    }
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $entrenador = Entrenador::create($request->all());
            return redirect()->route('users.show', $entrenador->user_id);
	}

	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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

	

}
