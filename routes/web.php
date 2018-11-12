<?php

use App\Cat;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats', function () {
    Cat::create(
        ['info' => json_encode(['name' => 'Fluffy', 'long-hair' => true])]
    );

    Cat::create(
        ['info' => json_encode(['name' => 'Furball', 'long-hair' => false])]
    );

    Cat::create(
        ['info' => json_encode(['name' => 'Igor', 'long-hair' => true])]
    );
});
