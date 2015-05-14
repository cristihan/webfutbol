<?php namespace webfutbol\Http\Controllers;

use webfutbol\Http\Requests;
use webfutbol\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
        {
            return view('app/index');
        }	

}
