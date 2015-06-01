<?php

namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use webfutbol\Partido;
use webfutbol\Categoria;
use webfutbol\JugadorPartido;
use Illuminate\Http\Request;

class PartidosController extends Controller {

    private $categorias;
    
    /**
     *  aqui obtenemos una lista de todas las categorias registradas
     */
    public function __construct() {
        $this->categorias = Categoria::lists('nombre', 'id');
    }

    /**
     * funcion que crea una lista o registros de los partidos, mediante el metodo paginate()
     * tambien paso como parametro la variable partidos, a la vista
     * @return view Retorna la vista de de todos los registro de todos los usuarios
     */
    public function index() {
        $partidos = Partido::paginate();
        //  dd($partidos);
        return view('partidos.index', compact('partidos'));
    }

    /**
     * Funcion que me muestra los campos del formulario para crear un partido, mediannte la peticion GET	 *
     * @return View, Retorna la vista el formulario que sera rellenado por el usuario, en este caso
     * no es neceserio, pasar ningun parametro, pero si el de categorias, que lo tenemos dentro del formulario
     * paso una variable de sesion a la vista llamada $categorias con el valor de $this->categorias
     */
    public function create() {
        return view('partidos.create', compact('partido'))->with([
                    'categorias' => $this->categorias,
        ]);
    }

    /**
     * Funcion de metodo post, del cual obtenemos los datos del formulario que fueron enviados a travez del formulario
     * tambien lo hacemos mediante el metodo Request, este caso es utilizando inteccion de dependencia
     * Pasamos un array de datos al objeto Partido, $request->all() para que los cree y lo guarde, 
     * @return redireccionamos a la ruta index, es decir al listato de todos los partidos, y enviamos una variable donde esta guardada el nombre de la categoria
     */
    public function store(Request $request) {
        $partidos = Partido::create($request->all());
        return redirect()->route('partidos.index', $partidos->categoria_id);
    }

    /**
     * Funcion que muestra los datos de un partido, 
     * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad         * 
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return View retorna la vista, pasando como parametro la variable partidos.     
     */
    public function show($id) {
        $partidos = Partido::findOrFail($id); //              
        return view('partidos.show', compact('partidos'));
    }

    /**
     * Funcion que muestra los datos de un partido, para editarlo, 
     * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad 	
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * tambien paso como parametro la variable partido, a la vista
     * @return View retorna la vista, pasando como parametro la variable partido
     * paso una variable de sesion a la vista llamada $categorias con el valor de $this->categorias
     */
    public function edit($id) {
        $partido = Partido::findOrFail($id);
        return view('partidos.edit', compact('partido'))->with([
                    'categorias' => $this->categorias,
        ]);
    }

    /**
     * Funcion que actualiza lo datos del partido, mediante el metodo request
     * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * grabamos los datos, y mediante el metodo fill pasamos todos los datos del formulario a travez del request
     * y finalmente actualizamos los datos mediante el metodo save
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta previa, es decir al listato de todos los partidos
     */
    public function update(Request $request, $id) {
        $partido = Partido::findOrFail($id);
        $partido->fill($request->all());
        $partido->save();
        return redirect()->route('partidos.index');
    }

    /**
     * Funcion de elimina los datos del partido mediante el metodo destroy
     * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * y para eliminar el partido utilizamos el metodo delete
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta previa, es decir al listato de todos los partidos
     */
    public function destroy(Request $request, $id) {
        $partido = Partido::findOrFail($id);

        $partido->delete();

        $message = $partido->rival . 'fue eliminado de nuestros registros';

        if ($request->ajax()) {
            return response()->json([
                        'id' => $partido->id,
                        'message' => $message,
            ]);
        }

        Session::flash('message', $message);

        return redirect()->route('partidos.index');
    }

    /**
     * Funcion que muestra las estadisticas de un partido, para editarlo, 
     * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad 	
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * tambien paso como parametro la variable partido, a la vista
     * @return View retorna la vista, pasando como parametro la variable partido
     */
    public function editEstadisticas($id) {
        $partido = Partido::findOrFail($id);
        return view('partidos.edit_estadisticas', compact('partido'));
    }

    
    /**
	 * Funcion que actualiza las estadisticas del partido, mediante el metodo request
         * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
         * grabamos los datos, y mediante el metodo fill pasamos todos los datos del formulario a travez del request
	 * y finalmente actualizamos los datos mediante el metodo save
	 * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
	 * @return redireccionamos a la ruta previa, es decir al listato de todos los partidos
	 */
    public function updateEstadisticas(Request $request, $id) {
        $partido = Partido::findOrFail($id);
        $partido->fill($request->all());
        $partido->save();
        return redirect()->route('partidos.index');
    }

}
