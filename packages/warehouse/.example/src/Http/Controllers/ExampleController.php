<?php

namespace Warehouse\Example\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Warehouse\Baseclass\Controller;

class ExampleController extends Controller
{
	public function index()
	{
		return ['sample module'];
		return Inertia::render('Home/Home', [
			'example' => URL::route('example'),
			'home' => URL::route('home'),
		]);
	}
}
