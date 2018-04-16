<?php

use Faker\Generator as Faker;

$factory->define(App\Models\School::class, function (Faker $faker) {
    return [

        'name'           => $faker->name,
        'location'       => $faker->city,
        'address'        => $faker->address,
        'email'          => $faker->email,
        'no_of_classes'  => $faker->numberBetween($min = 1, $max = 15),
        'no_of_teachers' => $faker->numberBetween($min = 5, $max = 20),
        'no_of_students' => $faker->numberBetween($min = 100, $max = 800),


    ];
});
