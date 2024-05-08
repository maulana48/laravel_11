<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users/{id?}', function (?string $id = null) {
    $users = [
        [
            "id" => 1,
            "nama" => "John Doe",
            "umur" => 20
        ],
        [
            "id" => 2,
            "nama" => "Jane Doe",
            "umur" => 22
        ],
        [
            "id" => 3,
            "nama" => "Jhonny Doe",
            "umur" => 24
        ]
    ];

    $result = [];
    if ($id == null) {
        return $users;
    }

    foreach ($users as $user) {
        if ($user['id'] == $id) {
            $result = $user;
        }
    }

    return $result;
});