<?php

use App\Models\BackpackUser as User;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		Role::create(array(
			'name' => "admin",
			'guard_name' => 'web',
		));

		$user = User::create(array(
			'name' => "Admin",
			'email' => "admin@example.com",
			'password' => app()->make('hash')->make("admin@example.com"),
		));
		$user->assignRole("admin");
	}
}
