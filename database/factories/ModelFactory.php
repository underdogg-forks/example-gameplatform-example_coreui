<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Giwrgos88\Game\Core\Models\Admin\Users::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'status' => 'active',
        'last_login_ip' => 'NULL',
        'last_login_at' => dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        'remember_token' => str_random(10),
    ];
});
