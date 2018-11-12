<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DogsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Dog::truncate();

        \App\Dog::create([
            'name'     => 'Joe',
            'age'      => 5,
            'birthday' => Carbon::create(2016, 7, 7, 0)
        ]);
        \App\Dog::create([
            'name'     => 'Jock',
            'age'      => 7,
            'birthday' => Carbon::create(2015, 1, 11, 0)
        ]);
        \App\Dog::create([
            'name'     => 'Jackie',
            'age'      => 2,
            'birthday' => Carbon::create(2013, 8, 3, 0)
        ]);
        \App\Dog::create([
            'name'     => 'Jane',
            'age'      => 9,
            'birthday' => Carbon::create(2010, 12, 12, 0)
        ]);
    }
}
