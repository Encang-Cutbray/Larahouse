<?php

namespace Warehouse\Example\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Warehouse\Baseclass\Controller;
use Warehouse\Example\Events\NewMessage;
use Warehouse\Example\Jobs\CheckUserVerificationJob;

class ExampleJobQueueController extends Controller
{
	public function queueJob($jobs = 4)
	{
		$user = User::first();
		if ($user) {
			for ($i = 0; $i < $jobs; $i++) {
				CheckUserVerificationJob::dispatch($user);
			}
			return ['done'];
		}
		return ['User not found'];
	}

	public function exampleWebsockets()
	{
		// event(new NewMessage('welocme'));
		return Inertia::render('Examples/Broadcasting');
		return ['exampleWebsockets'];
	}
}
