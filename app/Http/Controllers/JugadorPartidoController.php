<?php

namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Jugador;
use webfutbol\Partido;
use webfutbol\JugadorPartido;
use Illuminate\Http\Request;

class JugadorPartidoController extends Controller {

    /**
     * Funcion que muestra los datos de un partido y todo los jugadores, para editarlo, 
     * buscamos el objeto Partido mediante el metodo findOrFail, para cargar un dato con anterioridad 
     * tambien pedimosmediante el objeto Jugadores todos los datos de los jugadores	
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * tambien paso como parametro las variable partido y jugadores, a la vista
     * @return View retorna la vista, pasando como parametro las variables partido y jugadores
     */
    public function edit($id) {
        $partido = Partido::findOrFail($id);
        $jugadores = Jugador::all();

        return view('jugador_partido.edit', compact('partido', 'jugadores'));
    }

    /**
     * Funcion que obtiene los datos enviados por el usuario, para obtener y formatear datos para sincronizar 
     * con la tabla pivote.
     * Obtenemos las variables enviadas por el usuario
     * creamos una variable $data vacia donde guardaremos lo
     * @param  int  $id
     * un arreglo de jugadoes y un arreglo de los jugadores titulares,
     * seguros de que son arreglos crearemos un arreglo clave valor que almacene toda la informacion a ser sincronizada
     * iniciamos un ciclo que pase por cada elemento que se encuentre dentro de la matriz $jugadores
     * este ciclo nos pondra a nuestra disposicion las variables `$key` y `$id` que representan la `la clave`y el `valor` de cada valor dentro de `$jugadores
     * ahora nos aseguramos de que dentro del arreglo $titulares se encuentre el valor del $id del jugador
     * $value = in_array($id, $titulares) ? 1 : 0;` si es asi devolvemos 1 caso contrario devolvemos 0,
     * ahora en el arreglo `$data` en la posicion del `$id` almacenamos un arreglo cuyo valor sera el obtenido en la condicion anterior ['titular' => $value] 
     * caso contrario verificamos que `$jugadores` no sea nulo, si no es nula entonces, es decir si tiene algun contenido
     * lo pasamos a $data, que almacena los array que se sincronizaran en la tabla pivote
     * sincroniza los datos de la tabla pivote que relaciona a los partidos con los jugadores
     * redireccionamos a la ruta previa y enviamos una variable de sesion llamada `message` que contiene el string `Cambios guardados
     */
    public function update(Request $request, $id) {
        $partido = Partido::findOrFail($id);
        $jugadores = $request->get('jugador_id');
        $titulares = $request->get('titular');
        $data = [];

        if (is_array($jugadores) AND is_array($titulares)) {
            foreach ($jugadores as $key => $id) {
                $value = in_array($id, $titulares) ? 1 : 0;
                $data[$id] = ['titular' => $value];
            }
        } elseif (!is_null($jugadores)) {
            $data = $jugadores;
        }

        $partido->jugadores()->sync($data);

        return redirect()->back()->with('message', 'Cambios guardados');
    }

    
    /**
     * Funcion que muestra los datos de un partido y todo los jugadores, para editarlo, 
     * buscamos el objeto Partido mediante el metodo findOrFail, para cargar un dato con anterioridad     	
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * tambien paso como parametro las variable partido, a la vista
     * @return View retorna la vista, pasando como parametro las variables partido
     */
    public function editEstadisticasJugadores($id) {
        $partido = Partido::findOrFail($id);
        return view('jugador_partido.edit_jugadores_estadisticas', compact('partido'));
    }

    /**
     * Funcion que recupera y crea una matriz necesaria para sincronizar los datos con la base de datos
     * creamos una matriz vacia llamada $data
     * si $jugadores tiene uno o mas registros entre en el if
     * por cada valor en la matriz de $jugadores,
     * creamos una matriz vacia llamada $inputs,
     * recorremos cada valor del formulario enviado por el usuario (`$request->all()
     * obtenemos su clave y valor donde $name es el nombre del campo input y $input es el valor del mismo
     * si $input es un array (por ejemplo `goles[]`) entonces creamos el arreglo a sincronizar
     * $inputs[$name]` va a ser igual el resultado de la condicion (`isset` devuelve true si la variable que le pasas existe) si existe pasamos el valor del input si no pasamos 0
     * finalmente agregamos a $data el arreglo generado con $inputs
     * @param  int  $id
     * sincroniza los datos de la tabla pivote que relaciona a los partidos con los jugadores
     * redireccionamos a la ruta previa y enviamos una variable de sesion llamada `message` que contiene el string `Cambios guardados
     */
    public function updateEstadisticasJugadores(Request $request, $id) {
        $partido = Partido::findOrFail($id);
        $jugadores = $partido->jugadores;
        $data = [];

        if (count($jugadores)) {
            foreach ($jugadores as $jugador) {
                $inputs = [];

                foreach ($request->all() as $name => $input) {
                    if (is_array($input)) {
                        $inputs[$name] = isset($input[$jugador->id]) ? $input[$jugador->id] : 0;
                    }
                }

                $data[$jugador->id] = $inputs;
            }
        }

        $partido->jugadores()->sync($data);

        return redirect()->back()->with('message', 'Cambios guardados');
    }

}
