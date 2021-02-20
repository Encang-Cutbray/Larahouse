<?php

use App\Models\User;
use Warehouse\Auth\Mail\RegistrationMail;
use Warehouse\Auth\Http\Controllers\AuthController;

Route::group(['middleware' => ['web']], function () {
	Route::get('login', [AuthController::class, 'login'])->name('login');
	Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');

	Route::get('registration', [AuthController::class, 'registration'])->name('registration');
	Route::post('registration', [AuthController::class, 'registrationPost'])->name('registration.post');

	Route::get('mail-registration', function () {
		$user = User::first();
		return new RegistrationMail($user);
	});
});
