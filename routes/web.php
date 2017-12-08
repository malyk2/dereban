<?php

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
    echo "<h1>API</h1>";
});

Route::get('/mailable', function () {
    $user = App\User::find(1);

    return new App\Mail\UserCreate($user);
});
