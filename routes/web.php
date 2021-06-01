<?php

use App\Http\Controllers\Auth\RegisterController;
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
    return view('projects.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('projects.index');
})->name('dashboard');

Route::get('/tasks', function () {
    return view('projects.index');
})->name('tasks');

Route::get('/login', function () {
    return view('projects.index');
})->name('login');

Route::get('/register',[RegisterController::class,'index'])->name('register');

Route::get('/profile', function () {
    return view('projects.index');
})->name('profile');
