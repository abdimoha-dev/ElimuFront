<?php

use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\Headteacher;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Headteacher::all()->each(function ($user) {

            factory(School::class, 1)->create([
                'ht_id' => $user->id,
            ]);


        });

    }
}
