<?php namespace Modules\Modulacore\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ModulaCoreController extends Controller {
	
	public function index()
	{
		return view('modulacore::index');
	}
	
}