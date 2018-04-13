<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'user'  => [
                'first_name'  => 'Regular',
                'second_name' => 'User',
                'email'       => 'user@walimu4ne.co.ke',
                'phone'       => '+254700123456',
                'password'    => '1234',
                'role'        => 'TEACHER',
            ],
            'admin' => [
                'first_name'  => 'System',
                'second_name' => 'Admin',
                'email'       => 'admin@walimu4ne.co.ke',
                'phone'       => '+254700123457',
                'password'    => '1234',
                'role'        => 'HTEACHER',
            ],

            'root' => [
                'first_name'  => 'Super',
                'second_name' => 'User',
                'email'       => 'root@walimu4ne.co.ke',
                'phone'       => '+254700123458',
                'password'    => '1234',
                'role'        => 'ROOT',
            ],
        ];

        User::create($users['root']);
        User::create($users['admin']);
        User::create($users['user']);

        factory(User::class, 50)->create();
    }
}
