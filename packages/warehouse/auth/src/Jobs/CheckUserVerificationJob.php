<?php

namespace Warehouse\Auth\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class CheckUserVerificationJob implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	public $user;
	public function __construct(User $user)
	{
		$this->user = $user;
	}


	public function handle(User $users)
	{
		$userLists = $users->whereNull('email_verified_at')->delete();
		echo "\n$userLists\n";
	}

	public function tags()
	{
		return ['Encang Cutbray' . $this->user->name];
	}
}
