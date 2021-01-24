<?php

use Warehouse\Auth\Http\Controllers\AuthController;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('registration', [AuthController::class, 'postRegistration'])->name('post.registration');
