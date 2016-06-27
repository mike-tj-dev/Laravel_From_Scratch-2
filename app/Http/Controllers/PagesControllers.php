<?php

namespace App\Http\Controllers;

class PagesControllers extends Controller
{
	public function home()
	{
		$people = ['Mike', 'Daniel', 'Nope'];

		return view('welcome',compact('people'));
	}

	public function about()
	{
		return view('about');
	}
}
