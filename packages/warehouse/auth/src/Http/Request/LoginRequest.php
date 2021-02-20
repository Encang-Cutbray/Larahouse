<?php

namespace Warehouse\Auth\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Warehouse\Baseclass\FailedValidationJson;

class LoginRequest extends FormRequest
{
	use FailedValidationJson;

	public function authorize()
	{
		return !Auth::check();
	}

	public function rules()
	{
		return [
			'email' 	=> 'bail|required',
			'password' 	=> 'bail|required'
		];
	}
}
