<?php

namespace Warehouse\Baseclass;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
	{
		$this->trackingActivity();
	}

	private function trackingActivity()
	{
		$routeName = Route::currentRouteName();
		$method = request()->getMethod();
		$reqBody = collect(request()->all())->implode(', ');
		$urlParameters = collect(request()->route()->parameters)->implode(', ');
		$message = "path: {$routeName} -- method: {$method} -- url parameters: [{$urlParameters}] -- request body: [{$reqBody}]";
		try {
			Log::info($message);
		} catch (Exception $e) {
			$message = "path: {$routeName} -- method: {$method} -- url parameters: [{$urlParameters}] -- request body: [{$reqBody}] -- error: {$e->getMessage()}";
			Log::error($message);
		}
	}
}
