<?php

use Faker\Generator as Faker;

$factory->define(\App\DetailKebiasaanBuruk::class, function (Faker $faker) {
    return [
        'id_user' => 1,
        'id_keb_buruk' => $faker->numberBetween($min = 1, $max = 11),
    ];
});
