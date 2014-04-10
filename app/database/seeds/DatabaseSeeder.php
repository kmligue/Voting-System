<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UserTypeTableSeeder');
		$this->call('UserTableSeeder');
	}

}

class UserTypeTableSeeder extends Seeder {

	public function run() {
		DB::table('usertypes')->delete();

		$usertypes = array(
			array(
				'name' => 'administrator',
				'created_at' => new DateTime,
				'updated_at' => new DateTime 
			),
			array(
				'name' => 'guest',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			)
		);

		DB::table('usertypes')->insert($usertypes);
	}

}

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		$users = array(
			'fname' => 'km',
			'mname' => '',
			'lname' => 'ligue',
			'usertypeid' => '1',
			'username' => 'kmligue',
			'password' => Hash::make('kmligue'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime
		);

		DB::table('users')->insert($users);
	}

}