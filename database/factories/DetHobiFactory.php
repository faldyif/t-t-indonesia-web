<?php

use Faker\Generator as Faker;

$factory->define(\App\DetailHobi::class, function (Faker $faker) {
    return [
        'id_user' => 1,
        'id_hobi' => $faker->numberBetween($min = 1, $max = 15),
    ];
});
