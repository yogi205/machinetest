<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{

	function index($id='')
	{
return view('user_index');	}
    //
}
