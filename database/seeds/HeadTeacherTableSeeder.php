<?php

use Illuminate\Database\Seeder;

class HeadTeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headteachers')->insert([
            'Tsc_no' => str_random(10),
            'id_no' =>str_random(10),
            'alt_phone'=>str_random(10)

        ]);
    }
}
