<?php
namespace Warehouse\Home\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
	public function boot()
	{

		$this->loadRoutesFrom($this->pathRoute());

	}

	public function register()
	{

	}

	protected function pathRoute() {
		$dir = __DIR__;
		return "{$dir}/../Http/home.route.php";
	}
}
