<?php

namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Categoria;
use webfutbol\Http\Requests\CreateCategoriaRequest;
use Illuminate\Support\Facades\Session;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriasController extends Controller {

    /**
     * funcion que crea una lista o registros de las categorias, mediante el metodo paginate()
     * tambien paso como parametro la variable categorias, a la vista
     * @return view Retorna la vista de todos los registro de categorias.
     */
    public function index() {
        $categorias = Categoria::all();
//                dd($categorias);
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Funcion que me muestra los campos del formulario para crear una categoria, mediannte la peticion GET	 *
     * @return View, Retorna la vista el formulario que sera rellenado por el usuario, en este caso
     * no es neceserio, pasar ningun parametro.
     */
    public function create() {
        return view('categorias.create');
    }

    /**
     * Funcion de metodo post, del cual obtenemos los datos del formulario que fueron enviados a travez del formulario
     * tambien lo hacemos mediante el metodo Request, este caso es utilizando inteccion de dependencia
     * Pasamos un array de datos al objeto Categoria, $request->all() para que los cree y lo guarde,    
     * @return redireccionamos a la ruta previa, es decir al listato de todos los usuarios.
     */
    public function store(CreateCategoriaRequest $request) {

        $categoria = Categoria::create(Request::all());
        return Redirect()->route('categorias.index');
    }

    /**
     * Funcion que muestra los datos de un usuario, 
     * buscamos el objeto Categoria mediante el metodo findOrFail, para cargar un dato con anterioridad         * 
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return View retorna la vista, pasando como parametro la variable categoria
     */
    public function show($id) {
        $categoria = Categoria::findOrFail($id);
        //dd($categoria);
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Funcion que muestra los datos de un usuario, para editarlo, 
     * buscamos el objeto Categoria mediante el metodo findOrFail, para cargar un dato con anterioridad 	
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * tambien paso como parametro la variable categoria, a la vista
     * @return View retorna la vista, pasando como parametro la variable categoria
     */
    public function edit($id) {
        $categoria = Categoria::findOrFail($id);
        //dd($categoria);
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Funcion que actualiza lo datos de la categoria, mediante el metodo request
     * buscamos el objeto Categoria mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * grabamos los datos, y mediante el metodo fill pasamos todos los datos del formulario a travez del request
     * y finalmente actualizamos los datos mediante el metodo save
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta previa, es decir al listato de todos las categorias
     */
    public function update($id) {
        $categoria = Categoria::findOrFail($id);
        $categoria->fill(Request::all());
        $categoria->save();
        return redirect()->route('categorias.index');
    }

    /**
     * Funcion de elimina los datos de una categoria mediante el metodo destroy
     * buscamos el objeto Categoria mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * y para eliminar la Categoria utilizamos el metodo delete
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta previa, es decir al listato de todos las categorias
     */
    public function destroy($id) {
//             dd("eliminando: ". $id);
        $categoria = Categoria::findOrFail($id);

        $categoria->delete();

        $message = $categoria->nombre . ' fue eliminado de nuestros registros';

        if (Request::ajax()) {
            return response()->json([
                        'id' => $this->categoria->id,
                        'message' => $message,
            ]);
        }
        Session::flash('message', $message);

        return redirect()->route('categorias.index');
    }

}
