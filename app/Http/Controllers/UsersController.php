<?php namespace webfutbol\Http\Controllers;

//use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\User;
use webfutbol\Http\Requests\CreateUserRequest;
use webfutbol\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;//inyeccion de dependencias de request
//use Illuminate\Support\Facades\Request;//facades de request
use Illuminate\Support\Facades\Redirect;//facades de redirect
use Illuminate\Routing\Redirector;//inyeccion de dependencias

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
          $users = User::paginate(30);
//            $users = User::select('id','name','email','type')->orderBy('name','ASC')->paginate(15);
                
           return view ('users.index', compact('users')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 return view ('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{         
           
                $user = User::create($request->all());               
                return Redirect()->route('users.index');
                
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);//              
                return view('users.show', compact('user'));
            
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);//              
                return view('users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request, $id)
	{
		$user = User::findOrFail($id);
                $user->fill($request->all());
                $user->save();
                return redirect()->route('users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
//             dd("eliminando: ". $id);
	User::destroy($id);
        
//       Session::flash('message', $message);
       Session::flash('message', 'El registro fue eliminado');
        
        return redirect()->route('users.index');

	}

}
