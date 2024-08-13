<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
	public function agenda()
	{
		return view('content.agenda');
	}
	public function conocenos()
	{
		return view('content.conocenos');
	}
	public function contacto()
	{
		return view('content.contacto');
	}
	public function idioma()
	{
		return view('content.idioma');
	}
}
