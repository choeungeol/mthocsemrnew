<?php

class AdminSeeder extends DatabaseSeeder {

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$admin = Sentinel::registerAndActivate(array(
			'email'       => 'admin@admin.com',
			'password'    => "admin",
			'first_name'  => 'John',
			'last_name'   => 'Doe',
		));

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => array('admin' => 1),
		]);

		$admin1 = Sentinel::registerAndActivate(array(
				'email'       => 'test@idealize.co.kr',
				'password'    => "1234qwer",
				'first_name'  => 'idealize',
				'last_name'   => 'consulting',
		));

		Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'User',
			'slug'  => 'user',
		]);

		$admin->roles()->attach($adminRole);
		$admin1->roles()->attach($adminRole);
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
		$this->command->info('Admin User created with username admin@admin.com and password admin');
	}

}