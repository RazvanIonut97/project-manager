<?php

use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\LogoutController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
    return view('home');
})->name('home');

Route::get('/dashboard', function ()
{

    return view('projects.index');
})
    ->name('dashboard')
    ->middleware('auth');

Route::get('/dashboard/{project}', function (Project $project){
    return view('projects.project', ['project' => $project]);
})->middleware('auth')->name('project');

Route::get('/tasks', function ()
{
    return view('projects.index');
})
    ->name('tasks');

Route::get('/login', function ()
{
    return view('auth.login');
})->name('login');

Route::get('/register', function ()
{
    return view('auth.register');
})
    ->name('register');

Route::get('/profile', function ()
{
    return view('projects.index');
})->name('profile');

Route::post('/logout', [LogoutController::class , 'index'])->name('logout');

Route::get('/forgot-password', [ForgotPassword::class,'index'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPassword::class,'recover'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', [ForgotPassword::class,'reset'])
->name('password.update');

