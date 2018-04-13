<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Headteacher::class, function (Faker $faker) {
    return [

        'tsc_no'    => $faker->randomNumber($nbDigits = NULL, $strict = FALSE),
        'id_no'     => $faker->numberBetween($min = 23456789, $max = 98765432),
        'alt_phone' => $faker->e164PhoneNumber,


    ];
});
