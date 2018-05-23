<?php

use Faker\Generator as Faker;

$factory->define(\App\DetailKebiasaanBaik::class, function (Faker $faker) {
    return [
        'id_user' => 1,
        'id_keb_baik' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
