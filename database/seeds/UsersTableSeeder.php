<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();

        \App\User::create([
            'name'     => 'Jimmy',
            'email'    => 'jim@example.com',
            'password' => Hash::make('password')
        ]);
        \App\User::create([
            'name'     => 'Sharon',
            'email'    => 'sharon@example.com',
            'password' => Hash::make('password')
        ]);
    }
}
