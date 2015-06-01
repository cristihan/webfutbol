<?php

namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Jugador;
use webfutbol\Padre;
use webfutbol\Categoria;
use Illuminate\Http\Request;

class JugadoresController extends Controller {

    /**
     * variables o propiedades que utilizaremos en el constructor para llamar al controlador cuando se solicita una ruta 
     * @var type 
     */
    private $categorias;
    private $padres;
    
    /**
         * La propiedad o variable $habilidades almacenara los valores aceptados en el campo hahilidades de la tabla jugadores
         * @var type 
         */
    private $habilidades = [
        'diestro' => 'Diestro',
        'zurdo' => 'Zurdo',
        'ambidiestro' => 'Ambidiestro',
    ];
    
    /**
         * La propiedad o variable $posiciones almacenara los valores aceptados en el campo posiciones de la tabla jugadores
         * @var type 
         */
    private $posiciones = [
        'portero' => 'Portero',
        'central' => 'Central',
        'lateral' => 'Lateral',
        'mediocentro' => 'Mediocentro',
        'extremo' => 'extremo',
        'delantero' => 'Delantero',
    ];
    

    /**
         * metodo que se ejecuta automaticamente al crear el objecto haciendo referencia a la clase que lo contiene
         * aqui obtenemos una lista de todas las categorias y padres que hayamos registrado
         * el contructor ejecuta este codigo para llamar al controlador cuando se solicita una ruta.
         */
    public function __construct() {
        $this->categorias = Categoria::lists('nombre', 'id');
        $this->padres = Padre::lists('nombre', 'id');
    }

    /**
     * funcion que crea una lista o registros de los jugadores, mediante el metodo paginate()
     * tambien paso como parametro la variable jugadores, a la vista
     * @return view Retorna la vista de de todos los registro de todos los jugadores
     */
    public function index() {
        $jugadores = Jugador::paginate();
        //dd($jugadores);
        return view('jugadores.index', compact('jugadores'));
    }

    /**
     * Funcion que me muestra los campos del formulario para crear un jugador, mediannte la peticion GET	 *
     * @return View, Retorna la vista el formulario que sera rellenado por el usuario, en este caso
     * paso como parametro jugador, el de categorias, padres, habilidades, posiciones que lo tenemos dentro del formulario
     * paso una variable de sesion a la vista llamada $categorias con el valor de $this->categorias.
     */
    public function create() {
        return view('jugadores.create', compact('jugador'))->with([
                    'categorias' => $this->categorias,
                    'padres' => $this->padres,
                    'habilidades' => $this->habilidades,
                    'posiciones' => $this->posiciones,
        ]);
    }

    /**
     * Funcion de metodo post, del cual obtenemos los datos del formulario que fueron enviados a travez del formulario
     * tambien lo hacemos mediante el metodo Request, este caso es utilizando inteccion de dependencia
     * Pasamos mediante array todos los datos al objeto Jugador, $request->all() para que los cree y lo guarde, 
     * @return redireccionamos a la ruta index, es decir al listato de todos los jugadores.
     */
    public function store(Request $request) {
        $jugadores = Jugador::create($request->all());
        //dd($request->all());
        return redirect()->route('jugadores.index');
    }

    /**
     * Funcion que muestra los datos de un jugador, 
     * buscamos el objeto Jugador mediante el metodo findOrFail, para cargar un dato con anterioridad         * 
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return View retorna la vista, pasando como parametro la variable jugador    
     */
    public function show($id) {

        $jugador = Jugador::findOrFail($id); //              
        return view('jugadores.show', compact('jugador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $jugador = Jugador::findOrFail($id);
        return view('jugadores.edit', compact('jugador'))->with([
                    'categorias' => $this->categorias,
                    'padres' => $this->padres,
                    'habilidades' => $this->habilidades,
                    'posiciones' => $this->posiciones,
        ]);
    }

   /**
     * Funcion que actualiza lo datos del jugador, mediante el metodo request
     * buscamos el objeto Jugador mediante el metodo findOrFail, para cargar los datos con anterioridad pasando como parametro el $id dinamico 
     * grabamos los datos, y mediante el metodo fill pasamos todos los datos del formulario a travez del request
     * y finalmente actualizamos los datos mediante el metodo save
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta index, es decir al listato de todos los jugadores
     */
    public function update(Request $request, $id) {
        $jugador = Jugador::findOrFail($id);
        $jugador->fill($request->all());
        $jugador->save();
        return redirect()->route('partidos.index');
    }

    /**
     * Funcion de elimina los datos del jugador mediante el metodo destroy
     * buscamos el objeto jugador mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * y para eliminar el partido utilizamos el metodo delete
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta index, es decir al listato de todos los jugadores
     */
    public function destroy(Request $request, $id) {

        $jugador = Jugador::findOrFail($id);

        $jugador->delete();

        $message = $jugador->nombre . ' fue eliminado de nuestros registros';

        if ($request->ajax()) {
            return response()->json([
                        'id' => $jugador->id,
                        'message' => $message,
            ]);
        }

        Session::flash('message', $message);

        return redirect()->route('jugadores.index');
    }

}
