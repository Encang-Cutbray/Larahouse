<?php

namespace Warehouse\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
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
		return "{$dir}/../Http/dashboard.route.php";
	}
}
