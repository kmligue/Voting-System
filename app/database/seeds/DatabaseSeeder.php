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

		$this->call('UserTypeTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('CourseTableSeeder');
		$this->call('StudentTableSeeder');
		$this->call('PositionTableSeeder');
	}

}

class UserTypeTableSeeder extends Seeder {

	public function run() {
		DB::table('usertypes')->delete();

		UserType::create(array(
			'name' => 'administrator'
		));

		UserType::create(array(
			'name' => 'guest'
		));
	}

}

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		$user = new User;
		$user->fname = 'km';
		$user->lname = 'ligue';
		$user->username = 'kmligue';
		$user->password = Hash::make('kmligue');
		$user->image = '/assets/images/default.png';

		UserType::find(1)->user()->save($user);
	}

}

class CourseTableSeeder extends Seeder {

	public function run() {
		DB::table('courses')->delete();

		Course::create(array(
			'name' => 'BSIT',
			'description' => 'Bachelor Of Science In Information Technology'
		));

		Course::create(array(
			'name' => 'BSHRM',
			'description' => 'Bachelor Of Science In Hotel And Restaurant Management'
		));

	}

}

class StudentTableSeeder extends Seeder {

	public function run() {
		DB::table('students')->delete();

		$faker = new Faker\Generator();
		$faker->addProvider(new Faker\Provider\Student($faker));

		for($i = 0; $i < 50; $i++) {
			$student = new Student;

			$student->fname = $faker->firstName;
			$student->mname = $faker->middleName;
			$student->lname = $faker->lastName;

			Course::find($faker->courseId)->student()->save($student);
		}
	}
}

class PositionTableSeeder extends Seeder {

	public function run() {
		DB::table('positions')->delete();

		Position::create(array(
			'name' => 'President',
			'ordinality' => 1
		));
	}
}