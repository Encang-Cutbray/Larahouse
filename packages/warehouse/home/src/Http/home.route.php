<?php
use Warehouse\Home\Http\Controllers\HomeController;

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('example', [HomeController::class, 'example'])->name('example');
