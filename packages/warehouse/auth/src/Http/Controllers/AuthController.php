<?php

namespace Warehouse\Auth\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Warehouse\Baseclass\Controller;
use Warehouse\Auth\Http\Request\LoginRequest;
use Warehouse\Auth\Http\Request\RegistrationRequest;
use Warehouse\Auth\Services\AuthService;

class AuthController extends Controller
{
	protected $authService;

	public function __construct(AuthService $authService)
	{
		$this->authService = $authService;
	}

	public function login()
	{
		return Inertia::render('CutbrayAuth/Login', [
			'registration' => URL::route('registration')
		]);
	}

	public function postLogin(LoginRequest $request)
	{
		$valid = $request->validated();
		return response()->json($valid, 200);
	}

	public function registration(Request $request)
	{
		return Inertia::render('CutbrayAuth/Registration', [
			'login' => URL::route('login')
		]);
	}

	public function postRegistration(RegistrationRequest $request)
	{
		$valid = $request->validated();
		$this->authService->registrationNewUser($valid);
		return response()->json($valid, 200);
	}
}