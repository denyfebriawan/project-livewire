<?php

use App\Http\Controllers\UserDetailsController;
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
    return view('users.home');
})->name('home');

route::get('/register', function () {
    return view('users.index');
})->name('register');

route::get('/users', function () {
    return view('users.users');
})->name('users');

// route::get('/users/{id}', function () {
//     return view('users.details');
// })->name('user.details');

Route::get('users/{id}', [UserDetailsController::class, 'show'])->name('user.details');
