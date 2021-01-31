<?php
use Warehouse\Example\Http\Controllers\ExampleController;
use Warehouse\Example\Http\Controllers\ExampleJobQueueController;

Route::get('example-module', [ExampleController::class, 'index'])->name('example.module');
Route::get('example-jobs/{jobs?}', [ExampleJobQueueController::class, 'queueJob'])->name('queue.job');
Route::get('example-websockets', [ExampleJobQueueController::class, 'exampleWebsockets'])->name('example.websockets');
