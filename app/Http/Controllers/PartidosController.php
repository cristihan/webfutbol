<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
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
            return view('partidos.create', compact('partido'))->with([
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
		$partidos = Partido::findOrFail($id);//              
                return view('partidos.show', compact('partidos'))->with([
                'categorias' => $this->categorias,
                
            ]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $partido = Partido::findOrFail($id);
            return view('partidos.edit', compact('partido'))->with([
            'categorias' => $this->categorias,
                
            ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
            $partido = Partido::findOrFail($id);
            $partido->fill($request->all());
            $partido->save();
            return redirect()->route('partidos.index', $partido->categoria_id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
	     $partido = User::findOrFail($id);
        
             $partido->delete();
        
             $message = $partido->rival . 'fue eliminado de nuestros registros';
        
               if ($request->ajax())
               {
                return response()->json([
                'id' => $this->user->id,
                'message' =>  $message,
            ]);
          
               }        

       Session::flash('message', $message);
        
        return redirect()->route('partidos.index');

	}
}


