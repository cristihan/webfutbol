<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;

use webfutbol\Partido;
use webfutbol\Categoria;
use Illuminate\Http\Request;

class PartidosController extends Controller {
    
    
       private $categorias;
       
       
       public function __construct()
        {
            $this->categorias = Categoria::lists('nombre', 'id');
        }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $partidos = Partido::all();
          //  dd($partidos);
            return view('partidos.index', compact('partidos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return view('partidos.create', compact('partidos'))->with([
             'categorias' => $this->categorias,           
            ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
             $partidos = Partido::create($request->all());
             return redirect()->route('partidos.index', $partidos->categoria_id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $partidos = Partido::findOrFail($id);
            return view('partidos.edit', compact('partidos'))->with([
                'categorias' => $this->categorias,
                
            ]);
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
