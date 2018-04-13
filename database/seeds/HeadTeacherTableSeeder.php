<?php

use Illuminate\Database\Seeder;
use App\Models\Headteacher;
use App\Models\User;

class HeadTeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {


            if ($user->role=='HTEACHER') {
                factory(Headteacher::class, 1)->create([
                    'user_id' => $user->id,
                ]);
            }

        });


    }
}
