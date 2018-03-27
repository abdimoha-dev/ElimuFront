<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Application;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {
            factory(Application::class, 1)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
