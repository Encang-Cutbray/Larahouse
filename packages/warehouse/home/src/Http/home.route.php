<?php

use Warehouse\Home\Http\Controllers\HomeController;

if (!Route::has('dashboard')) {
	Route::get('dashboard', function () {
		return redirect('home');
	})->name('dashboard');
}

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('example', [HomeController::class, 'example'])->name('example');
