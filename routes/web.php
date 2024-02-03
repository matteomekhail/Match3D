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

Route::view('/', 'welcome');

Route::view('/afterlogin', 'livewire.after-login-page');

Route::view('/login', 'livewire.login-page');
Route::view('/register', 'livewire.register-page');

route::view('/dashboard', 'livewire.dashboard');
