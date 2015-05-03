<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Categoria;
use webfutbol\Http\Requests\CreateCategoriaRequest;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
class CategoriasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = Categoria::all();
//                dd($categorias);
                return view('categorias.index', compact('categorias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('categorias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCategoriaRequest $request)
	{             
               
		$categoria = Categoria::create(Request::all());
                 return Redirect()->route('categorias.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$categoria = Categoria::findOrFail($id);
                //dd($categoria);
                return view('categorias.show', compact('categoria'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                $categoria = Categoria::findOrFail($id);
                //dd($categoria);
		return view('categorias.edit', compact('categoria'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$categoria = Categoria::findOrFail($id);
                $categoria->fill(Request::all());
                $categoria->save();
                return redirect()->route('categorias.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
