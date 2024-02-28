<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-replication', function () {
    $user = new \App\Models\User;
    $user->name = 'John Doe';
    $user->email = 'john@cc.com';
    $user->password = '123456';
    $user->save();

    return 'User inserted successfully!';
});
