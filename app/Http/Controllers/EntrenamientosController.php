<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use webfutbol\Entrenamiento;
use webfutbol\Categoria;
use webfutbol\Jugador;
use webfutbol\EntrenamientoJugador;


class EntrenamientosController extends Controller {
    
    
    private $campos = [
            'campo_1'  => 'Campo 1',
            'campo_2' => 'Campo 2',
           
         ];
     
     private $dias = [
            'Lunes'  => 'Lunes',
            'Martes' => 'Martes',
            'Miercoles'  => 'Miercoles',
            'Jueves' => 'Jueves',
            'Viernes' => 'Viernes',
           
         ];
     
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
            $entrenamientos = Entrenamiento::paginate(30);
//                dd($entrenamientos);
                return view('entrenamientos.index', compact('entrenamientos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return view('entrenamientos.create', compact('entrenamiento'))->with([ 
              'categorias' => $this->categorias,   
              'campos' => $this->campos,
              'dias'     => $this->dias,
            ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
            $entrenamiento = Entrenamiento::create($request->all());
             return Redirect()->route('entrenamientos.index', $entrenamiento->categoria_id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $entrenamiento = Entrenamiento::findOrFail($id);
                //dd($entrenamiento);
                return view('entrenamientos.show', compact('entrenamiento'))->with([              
              'campos' => $this->campos,
              'dias'     => $this->dias,
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
            $entrenamiento = Entrenamiento::findOrFail($id);//              
               return view('entrenamientos.edit', compact('entrenamiento'))->with([ 
                'categorias' => $this->categorias,   
                'campos' => $this->campos,
                'dias'     => $this->dias,
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
                $entrenamiento = Entrenamiento::findOrFail($id);
                $entrenamiento->fill($request->all());
                $entrenamiento->save();
                return redirect()->route('entrenamientos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
            $entrenamiento = Entrenamiento::findOrFail($id);
        
            $entrenamiento->delete();
        
            $message = $entrenamiento->fecha . ' fue eliminado de nuestros registros';
        
            if ($request->ajax()){
            return response()->json([
                'id' => $this->entrenamiento->id,
                'message' =>  $message,
            ]);
          
        }        

            Session::flash('message', $message);
        
            return redirect()->route('entrenamientos.index');
	}

}
