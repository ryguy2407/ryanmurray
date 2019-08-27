<?php namespace Tests\Utilities;

use App\User;

trait UserActionsTrait {

	public function loginAsAdmin()
	{
		$user = factory(User::class)->create();

		$user->roles = 'admin';
		$user->save();

		$this->actingAs($user);
	}

	public function loginAsGuest()
	{
		$user = factory(User::class)->create();
		$this->actingAs($user);
	}

}