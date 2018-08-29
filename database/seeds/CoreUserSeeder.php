<?php

use Giwrgos88\Game\Core\Models\Admin\Users;
use Illuminate\Database\Seeder;
use Ultraware\Roles\Models\Permission;
use Faker\Provider\DateTime;



class CoreUserSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

    $faker = Faker\Factory::create();
    //$fakerdatetime = Faker\Provider\DateTime::create();

    for($i = 0; $i < 10; $i++) {
        \Giwrgos88\Game\Core\Models\Admin\Users::create([
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'status' => 'active',
        'last_login_ip' => 'NULL',
        'last_login_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        'remember_token' => str_random(10),
        ]);
    }
	}
}