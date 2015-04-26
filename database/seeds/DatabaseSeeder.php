<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('RoleTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('CourseTableSeeder');
	}

}

class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role')->delete();

        App\Role::create(['sso' => 'masterhand', 'user_role' => 'admin']);
        App\Role::create(['sso' => 'cq9nj', 'user_role' => 'admin']);

        App\Role::create(['sso' => 'abc123', 'user_role' => 'applicant']);
        App\Role::create(['sso' => 'zyx987', 'user_role' => 'applicant']);
        App\Role::create(['sso' => 'fewft3', 'user_role' => 'applicant']);
        App\Role::create(['sso' => 'wer443', 'user_role' => 'applicant']);
        App\Role::create(['sso' => 'jfj675', 'user_role' => 'applicant']);
        App\Role::create(['sso' => 'lmwv2c', 'user_role' => 'applicant']);
        App\Role::create(['sso' => 'jn9qc', 'user_role' => 'applicant']);
        App\Role::create(['sso' => 'rmixv8', 'user_role' => 'applicant']);

        App\Role::create(['sso' => 'scottgs', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'klaricm', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'dickinsonm', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'guilliamsd', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'chadhar', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'jurczykm', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'wangf', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'saaby', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'zhaoy', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'harrisonw', 'user_role' => 'instructor']);
        App\Role::create(['sso' => 'springerg', 'user_role' => 'instructor']);
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        App\User::create(['name' => 'Lawrence Williams', 'sso' => 'lmwv2c', 'email' => 'lmwv2c@mail.missouri.edu', 'password' => Hash::make('secret')]);
        App\User::create(['name' => 'Jackson Nowotny', 'sso' => 'jn9qc', 'email' => 'jn9qc@mail.missouri.edu', 'password' => Hash::make('secret')]);
        App\User::create(['name' => 'Ryan Iffrig', 'sso' => 'rmixv8', 'email' => 'rmxiv8@mail.missouri.edu', 'password' => Hash::make('secret')]);
        App\User::create(['name' => 'Master Hand', 'sso' => 'masterhand', 'email' => 'lawrencewilliams.lw@gmail.com', 'password' => Hash::make('iamthemaster')]);
        App\User::create(['name' => 'Jackson Nowotny', 'sso' => 'cq9nj', 'email' => 'ajnowotny@gmail.com', 'password' => Hash::make('secret')]);
        App\User::create(['name' => 'Michael Jordan', 'sso' => 'wer443', 'email' => 'winning@basket.ball', 'password' => Hash::make('secret')]);

    }

}

class CourseTableSeeder extends Seeder {

    public function run()
    {
        DB::table('course')->delete();

        App\Course::create(['courseid' => 'CS1050', 'coursename' => 'Algorithm Design and Programming I', 'instructor' => 'guilliamsd']);
        App\Course::create(['courseid' => 'CS2050', 'coursename' => 'Algorithm Design and Programming II', 'instructor' => 'guilliamsd']);
        App\Course::create(['courseid' => 'CS2270', 'coursename' => 'Introduction to Digital Logic', 'instructor' => 'wangf']);
        App\Course::create(['courseid' => 'CS3050', 'coursename' => 'Advanced Algorithm Design', 'instructor' => 'chadhar']);
        App\Course::create(['courseid' => 'CS3280', 'coursename' => 'Computer Organization and Assembly Language', 'instructor' => 'jurczykm']);
        App\Course::create(['courseid' => 'CS3330', 'coursename' => 'Object Oriented Programming', 'instructor' => 'guilliamsd']);
        App\Course::create(['courseid' => 'CS3380', 'coursename' => 'Database Applications and Information Systems', 'instructor' => 'klaricm']);
        App\Course::create(['courseid' => 'CS4050', 'coursename' => 'Design and Analysis of Algorithms', 'instructor' => 'saaby']);
        App\Course::create(['courseid' => 'CS4270', 'coursename' => 'Computer Architecture I', 'instructor' => 'zhaoy']);
        App\Course::create(['courseid' => 'CS4320', 'coursename' => 'Software Engineering I', 'instructor' => 'scottgs']);
        App\Course::create(['courseid' => 'CS4450', 'coursename' => 'Principles of Programming Language', 'instructor' => 'harrisonw']);
        App\Course::create(['courseid' => 'CS4520', 'coursename' => 'Operating Systems I', 'instructor' => 'springerg']);
    }

}
