<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Vacancy::class, function (Faker $faker) {
    return [
        'duration' => $faker->dateTime($max = 'now', $timezone = NULL),
        'subjects' => $faker->name,
        'class'    => $faker->name,
        'reference_no' =>$faker->numberBetween($min =1, $max = 15000),

    ];
});
