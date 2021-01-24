<?php

namespace Warehouse\Example\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom($this->pathRoute());
	}

	public function register()
	{
	}

	protected function pathRoute()
	{
		$dir = __DIR__;
		return "{$dir}/../Http/example.route.php";
	}
}
