<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
})->name('home');
Route::get('sign in', [AuthController::class, 'index'])->name("signIn");
Route::get('sign up', [AuthController::class, 'signUp'])->name('signUp');
Route::post('reg', [AuthController::class, "reg"])->name('reg');

Route::get('profile', [UserController::class, 'index'])->name('profile');
Route::get('profile/logout', [AuthController::class, 'logout'])->name('logout');
