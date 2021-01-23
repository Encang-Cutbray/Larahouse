<?php

namespace Warehouse\Home\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
	public function index()
	{
		return Inertia::render('Home/Home', [
			'example' => URL::route('example'),
			'home' => URL::route('home'),
		]);
	}

	public function example()
	{
		return Inertia::render('Home/Example2', [
			'example' => URL::route('example'),
			'home' => URL::route('home'),
		]);
	}
}
