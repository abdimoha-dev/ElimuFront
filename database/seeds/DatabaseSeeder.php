<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        $this->call(ApplicationTableSeeder::class);
        $this->call(HeadTeacherTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(VacanciesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);

    }
}
