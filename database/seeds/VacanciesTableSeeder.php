<?php

use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\Vacancy;

class VacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        School::all()->each(function ($school) {

             factory(Vacancy::class, 50)->create([
                 'school_id' => $school->id,
             ]);


         });

    }
}
