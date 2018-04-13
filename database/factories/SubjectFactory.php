<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Subject::class, function (Faker $faker) {
    return [
        'maths'     => $faker->boolean,
        'english'   => $faker->boolean,
        'kiswahili' => $faker->boolean,
        'physics'   => $faker->boolean,
        'biology'   => $faker->boolean,
        'geography' => $faker->boolean,
        'science'   => $faker->boolean,
    ];
});
