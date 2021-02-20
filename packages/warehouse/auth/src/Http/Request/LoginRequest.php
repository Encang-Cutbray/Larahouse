<?php

namespace Warehouse\Auth\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
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
