<?php

namespace Warehouse\Dashboard\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Warehouse\Baseclass\Controller;

class DashboardController extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{
		return Inertia::render('Larahouse/Dashboard/Index');
	}
}
