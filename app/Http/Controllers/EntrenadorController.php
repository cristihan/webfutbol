<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;

use Illuminate\Http\Request;
use webfutbol\Categoria;
use webfutbol\Entrenador;
use webfutbol\Http\Requests\CreateEntrenadorRequest;

class EntrenadorController extends Controller {
    
        /**
         * variable o propiedad que utilizaremos en el constructor para llamar al controlador cuando se solicita una ruta 
         * @var type 
         */
        private $categorias;
        
        /**
         * La propiedad o variable $cargos almacenara los valores aceptados en el campo cargo de la tabla entrenadores
         * @var type 
         */
        private $cargos = [
            'primer_entrenador'  => 'Primer entrenador',
            'segundo_entrenador' => 'Segundo entrenador',
         ];
        
        /**
         * metodo que se ejecuta automaticamente al crear el objecto haciendo referencia a la clase que lo contiene
         * aqui obtenemos una lista de todas las categorias registradas
         * el contructor ejecuta este codigo para llamar al controlador cuando se solicita una ruta.
         */
        public function __construct()
        {
            $this->categorias = Categoria::lists('nombre', 'id');
        }

	
	/**
	 * Devuelve una vista `entrenador/create.blade.php` y le pasa a la vista el usuario, 
	 * la lista de categorias y la lista de cargos
         * paso una variables de sesion a la vista llamada $categorias con el valor de $this->categorias         
         * paso una variable de sesion a la vista llamada $cargos con el valor de $this->cargos
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
     * Funcion de metodo post, del cual obtenemos los datos del formulario que fueron enviados a travez del formulario
     * tambien lo hacemos mediante el metodo Request, este caso es utilizando inteccion de dependencia
     * Pasamos un array de datos al objeto Categoria, $request->all() para que los cree y lo guarde,    
     * @return redireccionamos a la ruta previa, es decir al listato de todos los usuarios.
     */
	public function store(CreateEntrenadorRequest $request)
	{
            $entrenador = Entrenador::create($request->all());
            return redirect()->route('users.show', $entrenador->user_id);
	}

	

	/**
	 * Funcion que muestra los datos de un entrenador, para editarlo,
	 * buscamos el objeto Entrenador mediante el metodo findOrFail, para cargar un dato con anterioridad
	 * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
         * tambien paso como parametros la variable entrenador, categorias y cargos a la vista
	 * @return View retorna la vista editar.
         * paso una variables de sesion a la vista llamada $categorias con el valor de $this->categorias
         * paso una variable de sesion a la vista llamada $cargos con el valor de $this->cargos
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
	 * Funcion que actualiza lo datos de la entrenador, mediante el metodo request
	 * buscamos el objeto Entrenador mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico
         * grabamos los datos, y mediante el metodo fill pasamos todos los datos del formulario a travez del request
         * y finalmente actualizamos los datos mediante el metodo save
         * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero	 
	 * @return redireccionamos a la ruta show, es decir al listato de todos las usuarios
	 */
	public function update(Request $request, $id)
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
