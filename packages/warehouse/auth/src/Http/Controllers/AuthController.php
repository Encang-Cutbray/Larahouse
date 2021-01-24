<?php

namespace Warehouse\Auth\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Warehouse\Baseclass\Controller;

class AuthController extends Controller
{
	public function login()
	{
		return Inertia::render('CutbrayAuth/Login', [
			'registration' => URL::route('registration')
		]);
	}

	public function postLogin(Request $request)
	{
		return Inertia::render('CutbrayAuth/Login', []);
	}

	public function registration(Request $request)
	{
		return Inertia::render('CutbrayAuth/Registration', [
			'login' => URL::route('login')
		]);
	}

	public function postRegistration(Request $request)
	{
		return Inertia::render('CutbrayAuth/Registration', []);
	}
}
