<?php
namespace Warehouse\Auth\Providers;

use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
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
		return "{$dir}/../Http/auth.route.php";
	}
}
