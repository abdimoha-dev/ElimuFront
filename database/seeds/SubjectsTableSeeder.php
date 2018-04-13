<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\User;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::all()->each(function ($user) {
            if ($user->role=='TEACHER') {
                factory(Subject::class, 1)->create([
                    'user_id' => $user->id,
                ]);
            }

        });


    }
}
