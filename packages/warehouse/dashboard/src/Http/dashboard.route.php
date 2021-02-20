<?php

use Warehouse\Dashboard\Http\Controllers\DashboardController;

Route::group(['middleware' => ['web', 'auth']], function () {
	Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
