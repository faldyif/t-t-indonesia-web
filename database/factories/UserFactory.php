<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'user_type' => 1,
        'verified' => $faker->boolean,

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => '08' . $faker->randomNumber($nbDigits = 9, $strict = false),
        'password' => bcrypt('secret'), // secret
        'remember_token' => str_random(10),
    ];
});
