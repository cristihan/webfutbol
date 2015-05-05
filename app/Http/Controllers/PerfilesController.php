<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;
use webfutbol\Perfil;
use Illuminate\Http\Request;

class PerfilesController extends Controller {

	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{		
    
        $perfil = Perfil::findOrFail($id);

        return view('users.edit_perfil', compact('perfil'));
    
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
	$perfil = Perfil::findOrFail($id);

        $perfil->fill($request->all());
        
        $perfil->save();

        return redirect()->back();
//        return redirect()->route('users.show', $perfil->user);
	}	

}
