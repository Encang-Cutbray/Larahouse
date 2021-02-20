<?php

namespace Warehouse\Auth\Services;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Warehouse\Auth\Mail\RegistrationMail;
use Warehouse\Baseclass\WarehouseException;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthService
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function loginUser(array $datauser)
	{
		try {
			$user = Auth::attempt($datauser);
			return $user;
		} catch (Exception $th) {
			throw (new WarehouseException('Failed user login', [$th->getMessage()]))
				->withStatus(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function registrationNewUser(array $userData): User
	{
		DB::beginTransaction();
		try {
			$user = $this->createUser($userData);
			DB::commit();
			$this->sendEmailRegistration($user);
			return $user;
		} catch (Exception $th) {
			DB::rollBack();
			throw (new WarehouseException('Failed registration a new user', [$th->getMessage()]))
				->withStatus(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
		}
	}

	public function createUser(array $userData): User
	{
		return User::create([
			'name' 		=> $userData['name'],
			'email' 	=> $userData['email'],
			'password' 	=> Hash::make($userData['password']),
		]);
	}

	public function sendEmailRegistration(User $user)
	{
		Mail::to($user->email)->queue(new RegistrationMail($user));
	}
}
