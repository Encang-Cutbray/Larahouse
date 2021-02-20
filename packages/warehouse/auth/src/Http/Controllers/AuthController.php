<?php

namespace Warehouse\Auth\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\URL;
use Warehouse\Baseclass\Controller;
use Warehouse\Auth\Services\AuthService;
use Warehouse\Auth\Http\Request\LoginRequest;
use Warehouse\Auth\Http\Request\RegistrationRequest;

class AuthController extends Controller
{
	protected $authService;

	public function __construct(AuthService $authService)
	{
		$this->middleware('guest');
		$this->authService = $authService;
	}

	public function login()
	{
		return Inertia::render('Larahouse/Auth/Login', [
			'urlRegistration' => URL::route('registration'),
			'urlLoginPost' => URL::route('login.post')
		]);
	}

	public function loginPost(LoginRequest $request)
	{
		$valid = $request->validated();
		$user = $this->authService->loginUser($valid);
		return response()->json($user, 200);
	}

	public function registration()
	{
		return Inertia::render('Larahouse/Auth/Registration', [
			'urlLogin' => URL::route('login'),
			'urlRegistrationPost' => URL::route('registration.post')
		]);
	}

	public function registrationPost(RegistrationRequest $request)
	{
		$valid = $request->validated();
		$user = $this->authService->registrationNewUser($valid);
		return response()->json($user, 200);
	}
}
