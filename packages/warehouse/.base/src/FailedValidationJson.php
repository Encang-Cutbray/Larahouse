<?php

namespace Warehouse\Baseclass;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

trait FailedValidationJson
{
	protected function failedValidation(Validator $validator)
	{
		$errors = (new ValidationException($validator))->errors();
		throw (new WarehouseException('Validation Error', $errors))
			->withStatus(JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
	}
}
