<?php

namespace Warehouse\Home\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Warehouse\Baseclass\Controller;

class HomeController extends Controller
{
	public function __construct()
	{
	}
	public function index()
	{
		return Inertia::render('Larahouse/Home/Home', [
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
