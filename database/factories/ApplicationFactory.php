<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Application::class, function (Faker $faker) {
    return [

        'user_id' => NULL,
        'place_of_birth' => $faker->state,
        'place_of_residence' => $faker->unique()->safeEmail,
        'id_number' => $faker->numberBetween($min = 23456789, $max = 98765432),
        'year_of_birth' => $faker->date, // secret
        'education_level' => $faker->name,
        'year_finished_sec' => $faker->date,
        'sec_school' => $faker->name,
        'index_no' => $faker->randomNumber($nbDigits = NULL, $strict = FALSE),
        'higher_inst' => $faker->name,
        'course' => $faker->name,
        'subject_one' => $faker->name,
        'subject_two' => $faker->name,
        'first_reference' => $faker->name,
        'second_reference' => $faker->name,
        'next_of_kin_name' => $faker->name,
        'next_of_kin_phone' => $faker->e164PhoneNumber,
        'relationship' => $faker->name,
    ];
});
