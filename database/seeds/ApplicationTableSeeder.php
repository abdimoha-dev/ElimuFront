<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Application;

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
            if (($user->id != 1 && $user->id != 2)) {
                factory(Application::class, 1)->create([
                    'user_id' => $user->id,
                ]);
            }
        });
    }
}
