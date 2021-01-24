<?php

namespace Warehouse\Auth\Services;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;
use Warehouse\Baseclass\WarehouseException;

class AuthService
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function loginUser()
	{
	}

	public function registrationNewUser(array $userData)
	{
		DB::beginTransaction();
		try {
			$user = User::create($userData);
			DB::commit();
			return $user;
		} catch (Exception $th) {
			DB::rollBack();
			throw (new WarehouseException('Failed registration a new user'))
				->withStatus(JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
		}
	}
}
