<?php

namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use webfutbol\Entrenamiento;
use webfutbol\Categoria;
use webfutbol\Jugador;
use webfutbol\EntrenamientoJugador;

class EntrenamientosController extends Controller {

    /**
     * La propiedad o variable $campos almacenara los valores aceptados en el campo campos de la tabla entrenamientos
     * @var type 
     */
    private $campos = [
        'campo_1' => 'Campo 1',
        'campo_2' => 'Campo 2',
    ];

    /**
     * La propiedad o variable $dias almacenara los valores aceptados en el campo dias de la tabla entrenamientos
     * @var type 
     */
    private $dias = [
        'Lunes' => 'Lunes',
        'Martes' => 'Martes',
        'Miercoles' => 'Miercoles',
        'Jueves' => 'Jueves',
        'Viernes' => 'Viernes',
    ];

    /**
     * variable o propiedad que utilizaremos en el constructor para llamar al controlador cuando se solicita una ruta
     * @var type 
     */
    private $categorias;

    /**
     * metodo que se ejecuta automaticamente al crear el objecto haciendo referencia a la clase que lo contiene
     * aqui obtenemos una lista de todas las categorias registradas
     * el contructor ejecuta este codigo para llamar al controlador cuando se solicita una ruta.
     */
    public function __construct() {
        $this->categorias = Categoria::lists('nombre', 'id');
    }

    /**
     * funcion que crea una lista o registros de los entrenamientos, mediante el metodo paginate()
     * tambien paso como parametro la variable entrenamientos, a la vista
     * @return view Retorna una vista de todos los registro de los entrenamientos.
     */
    public function index() {
        $entrenamientos = Entrenamiento::paginate(30);
//                dd($entrenamientos);
        return view('entrenamientos.index', compact('entrenamientos'));
    }

    /**
     * Funcion que me muestra los campos del formulario para crear los entrenamientos, mediannte la peticion GET	 *
     * @return View, Retorna la vista el formulario que sera rellenado por el usuario, 
     * paso una variables de sesion a la vista llamada $categorias con el valor de $this->categorias
     * paso una variable de sesion a la vista llamada $campos con el valor de $this->campos
     * paso una variable de sesion a la vista llamada $dias con el valor de $this->dias
     */
    public function create() {
        return view('entrenamientos.create', compact('entrenamiento'))->with([
                    'categorias' => $this->categorias,
                    'campos' => $this->campos,
                    'dias' => $this->dias,
        ]);
    }

    /**
     * Funcion de metodo post, del cual obtenemos los datos del formulario que fueron enviados a travez del formulario
     * tambien lo hacemos mediante el metodo Request, este caso es utilizando inteccion de dependencia
     * Pasamos un array de datos al objeto Entrenamiento, $request->all() para que los cree y lo guarde,    
     * @return redireccionamos a la ruta index, es decir al listato de todos los entrenamiento.
     */
    public function store(Request $request) {
        $entrenamiento = Entrenamiento::create($request->all());
        return Redirect()->route('entrenamientos.index', $entrenamiento->categoria_id);
    }

    /**
     * Funcion que muestra los datos de un entrenamiento, 
     * buscamos el objeto Entrenamiento mediante el metodo findOrFail, para cargar un dato con anterioridad         * 
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return View retorna la vista, pasando como parametro la variable Entrenamientos
     * paso una variable de sesion a la vista llamada $campos con el valor de $this->campos
     * paso una variable de sesion a la vista llamada $dias con el valor de $this->dias
     */
    public function show($id) {
        $entrenamientos = Entrenamiento::findOrFail($id);
        //dd($entrenamiento);
        return view('entrenamientos.show', compact('entrenamientos'))->with([
                    'campos' => $this->campos,
                    'dias' => $this->dias,
        ]);
    }

    /**
     * Funcion que muestra los datos de un entrenamiento, para editarlo, 
     * buscamos el objeto Entrenamiento mediante el metodo findOrFail, para cargar un dato con anterioridad 	
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero     
     * @return View retorna la vista, pasando como parametro la variable entrenamiento
     * paso una variables de sesion a la vista llamada $categorias con el valor de $this->categorias
     * paso una variable de sesion a la vista llamada $campos con el valor de $this->campos
     * paso una variable de sesion a la vista llamada $dias con el valor de $this->dias
     */
    public function edit($id) {
        $entrenamiento = Entrenamiento::findOrFail($id); //              
        return view('entrenamientos.edit', compact('entrenamiento'))->with([
                    'categorias' => $this->categorias,
                    'campos' => $this->campos,
                    'dias' => $this->dias,
        ]);
    }

    /**
     * Funcion que actualiza lo datos del entrenamiento, mediante el metodo request
     * buscamos el objeto Entrenamiento mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * grabamos los datos, y mediante el metodo fill pasamos todos los datos del formulario a travez del request
     * y finalmente actualizamos los datos mediante el metodo save
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta index, es decir al listato de todos los Entrenamientos
     */
    public function update(Request $request, $id) {
        $entrenamiento = Entrenamiento::findOrFail($id);
        $entrenamiento->fill($request->all());
        $entrenamiento->save();
        return redirect()->route('entrenamientos.index');
    }

    /**
     * Funcion de elimina los datos de un Entrenamiento mediante el metodo destroy
     * buscamos el objeto Entrenamiento mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * y para eliminar el Entrenamiento utilizamos el metodo delete
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta index, es decir al listato de todos los entrenamientos
     */
    public function destroy(Request $request, $id) {
        $entrenamiento = Entrenamiento::findOrFail($id);

        $entrenamiento->delete();

        $message = $entrenamiento->fecha . ' fue eliminado de nuestros registros';

        if ($request->ajax()) {
            return response()->json([
                        'id' => $entrenamiento->id,
                        'message' => $message,
            ]);
        }

        Session::flash('message', $message);

        return redirect()->route('entrenamientos.index');
    }

}
