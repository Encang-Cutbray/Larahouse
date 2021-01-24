<?php

use Warehouse\Example\Http\Controllers\ExampleController;


Route::get('example-module', [ExampleController::class, 'index'])->name('example.module');
