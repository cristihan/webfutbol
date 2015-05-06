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
	public function create($user)
        {
            
            return view('entrenador.create', compact('user'))->with([
            'categorias' => $this->categorias,
            'cargos'     => $this->cargos,
            ]);
        }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
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
            $entrenador = Entrenador::findOrFail($id);
            return view('entrenador.edit', compact('entrenador'))->with([
                'categorias' => $this->categorias,
                'cargos'     => $this->cargos,
            ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request, $id)
	{
            $entrenador = Entrenador::findOrFail($id);
            $entrenador->fill($request->all());
            $entrenador->save();
            return redirect()->route('users.show', $entrenador->user_id);
        }   
            
//            public function update(EditUserRequest $request, $id)
//    {
//        $user = User::findOrFail($id);
//        $user->fill($request->all());
//        $user->save();
//
//        if ($user->type == 'administrador' AND $user->entrenador) {
//            $user->entrenador->delete();
//        }
//
//        return redirect()->route('users.index');
//    }
//	}

	

}
