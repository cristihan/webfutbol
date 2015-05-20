<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Jugador;
use webfutbol\Padre;
use webfutbol\Categoria;
use Illuminate\Http\Request;

class JugadoresController extends Controller {
    
    
     private $categorias;
     private $padres;
     
     private $habilidades = [
            'diestro'  => 'Diestro',
            'zurdo' => 'Zurdo',
            'ambidiestro' => 'Ambidiestro',
         ];
     
     private $posiciones = [
            'portero'  => 'Portero',
            'central' => 'Central',
            'lateral'  => 'Lateral',
            'mediocentro' => 'Mediocentro',
            'extremo' => 'extremo',
            'delantero' => 'Delantero',
         ];
        

        public function __construct()
        {
             $this->categorias = Categoria::lists('nombre', 'id');
             $this->padres = Padre::lists('nombre', 'id');
        }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $jugadores = Jugador::paginate();
            //dd($jugadores);
            return view('jugadores.index', compact('jugadores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
             return view('jugadores.create', compact('jugador'))->with([
              'categorias' => $this->categorias,
              'padres'     => $this->padres,
              'habilidades' => $this->habilidades,
              'posiciones'     => $this->posiciones,
            ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
            $jugadores = Jugador::create($request->all());
            //dd($request->all());
            return redirect()->route('jugadores.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            
            $jugador = Jugador::findOrFail($id);//              
            return view('jugadores.show', compact('jugador'));            
            
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $jugador = Jugador::findOrFail($id);
            return view('jugadores.edit', compact('jugador'))->with([
                'categorias' => $this->categorias,
                'padres'     => $this->padres,
                'habilidades' => $this->habilidades,
                'posiciones'     => $this->posiciones,
            ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
            $jugador = Jugador::findOrFail($id);
            $jugador->fill($request->all());
            $jugador->save();
            return redirect()->route('partidos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
            
             $jugador = Jugador::findOrFail($id);
        
             $jugador->delete();
        
             $message = $jugador->nombre . ' fue eliminado de nuestros registros';
        
               if ($request->ajax())
               {
                return response()->json([
                'id' => $this->jugador->id,
                'message' =>  $message,
            ]);
          
               }        

       Session::flash('message', $message);
        
        return redirect()->route('jugadores.index');
	}
        
        
    public function editEntrenamiento($id)
    {
           $partido = Partido::findOrFail($id);
           return view('partidos.edit_estadisticas', compact('partido'));
    }
    
    
    public function updateEntrenamiento(Request $request, $id)
	{
            $partido = Partido::findOrFail($id);
            $partido->fill($request->all());
            $partido->save();
            return redirect()->route('partidos.index');
	}

}
