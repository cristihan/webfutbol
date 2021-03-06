<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Padre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PadresController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	  $padres = Padre::paginate(30);//          
                
          return view ('padres.index', compact('padres')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
                 //dd('padres.create');  
		 return view ('padres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$padre = Padre::create($request->all());
                 return Redirect()->route('padres.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$padre = Padre::findOrFail($id);//              
                return view('padres.show', compact('padre'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$padre = Padre::findOrFail($id);//              
                return view('padres.edit', compact('padre'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$padre = Padre::findOrFail($id);
                $padre->fill($request->all());
                $padre->save();
                return redirect()->route('padres.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
		
        $padre = Padre::findOrFail($id);
        
        $padre->delete();
        
        $message = $padre->nombre . ' fue eliminado de nuestros registros';
        
         if ($request->ajax()){
            return response()->json([
                'id' => $this->padre->id,
                'message' =>  $message,
            ]);
          
        }        

       Session::flash('message', $message);
        
        return redirect()->route('padres.index');
        
	}

}
