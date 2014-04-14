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
		//$this->call('UserTableSeeder');
		$this->call('CourseTableSeeder');
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

class CourseTableSeeder extends Seeder {

	public function run() {
		DB::table('courses')->delete();

		$courses = array(
			array(
				'name' => 'BSIT',
				'description' => 'Bachelor in Science in Information Technology',
				'representative' => 0,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			array(
				'name' => 'BSHRM',
				'description' => 'Bachelor in Science in Hotel and Restaurant Management',
				'representative' => 0,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			)
		);

		DB::table('courses')->insert($courses);

	}

}