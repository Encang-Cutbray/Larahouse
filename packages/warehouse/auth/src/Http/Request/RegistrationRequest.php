<?php

namespace Warehouse\Auth\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Warehouse\Baseclass\FailedValidationJson;



class RegistrationRequest extends FormRequest
{
	use FailedValidationJson;

	public function authorize()
	{
		return !Auth::check();
	}

	public function rules()
	{
		return [
			'fullname' => 'required',
			'email'	=> 'required|email',
			'password' => 'required|min:5'
		];
	}
}
