<?php

namespace webfutbol\Http\Controllers;

//use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\User;
use webfutbol\Perfil;
use webfutbol\Http\Requests\CreateUserRequest;
use webfutbol\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request; //inyeccion de dependencias de request
//use Illuminate\Support\Facades\Request;//facades de request
use Illuminate\Support\Facades\Redirect; //facades de redirect
use Illuminate\Routing\Redirector; //inyeccion de dependencias

class UsersController extends Controller {

    /**
     * funcion que crea una lista o registros de los usuarios, mediante el metodo paginate()
     * tambien paso como parametro la variable users, a la vista
     * @return view Retorna la vista de de todos los registro de usuarios.
     */
    public function index() {
        $users = User::paginate(30);
//            $users = User::select('id','name','email','type')->orderBy('name','ASC')->paginate(15);

        return view('users.index', compact('users'));
    }

    /**
     * Funcion que me muestra los campos del formulario para crear un usuario, mediannte la peticion GET	 *
     * @return View, Retorna la vista el formulario que sera rellenado por el usuario, en este caso
     * no es neceserio, pasar ningun parametro.
     */
    public function create() {
        return view('users.create');
    }

    /**
     * Funcion de metodo post, del cual obtenemos los datos del formulario que fueron enviados a travez del formulario
     * tambien lo hacemos mediante el metodo Request, este caso es utilizando inteccion de dependencia
     * Pasamos un array de datos al objeto Partido, $request->all() para que los cree y lo guarde, 
     * creamos un nuevo objeto llamado perfil, que estara listo y cargado
     * y asociamos el perfil que te pertenece a cada usuario
     * @return redireccionamos a la ruta previa, es decir al listato de todos los usuarios.
     */
    public function store(CreateUserRequest $request) {

        $user = User::create($request->all());
        $perfil = new Perfil();
        $user->perfil()->save($perfil);
        return Redirect()->route('users.index');
    }

    /**
     * Funcion que muestra los datos de un usuario, 
     * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad         * 
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return View retorna la vista, pasando como parametro la variable user
     */
    public function show($id) {
        $user = User::findOrFail($id); //              
        return view('users.show', compact('user'));
    }

    /**
     * Funcion que muestra los datos de un usuario, para editarlo, 
     * buscamos el objeto partido mediante el metodo findOrFail, para cargar un dato con anterioridad 	
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * tambien paso como parametro la variable user, a la vista
     * @return View retorna la vista, pasando como parametro la variable user
     */
    public function edit($id) {
        $user = User::findOrFail($id); //              
        return view('users.edit', compact('user'));
    }

    /**
     * Funcion que actualiza lo datos del usuario, mediante el metodo request
     * buscamos el objeto user mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * grabamos los datos, y mediante el metodo fill pasamos todos los datos del formulario a travez del request
     * y finalmente actualizamos los datos mediante el metodo save
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta previa, es decir al listato de todos los usuarios
     */
    public function update(EditUserRequest $request, $id) {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Funcion de elimina los datos de un usuario con su perfil mediante el metodo destroy
     * buscamos el objeto User mediante el metodo findOrFail, para cargar un dato con anterioridad pasando como parametro el $id dinamico 
     * y para eliminar el usuario utilizamos el metodo delete
     * @param  int  $id pasamos el valor id como parametro, que en este caso es un numero
     * @return redireccionamos a la ruta previa, es decir al listato de todos los usuarios
     */
    public function destroy(Request $request, $id) {

        $user = User::findOrFail($id);

        $user->delete();

        $message = $user->email . 'fue eliminado de nuestros registros';

        if ($request->ajax()) {
            return response()->json([
                        'id' => $user->id,
                        'message' => $message,
            ]);
        }

        Session::flash('message', $message);

        return redirect()->route('users.index');
    }

}
