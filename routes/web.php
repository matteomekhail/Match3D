<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AdminSidebar;

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

Route::middleware(['access.by.password'])->group(function () {
    // Tutte le route sono ora protette dal middleware 'access.by.password'

    // Route principale
    Route::get('/', function () {
        return view('welcome');
    });

    // Altre route protette
    Route::view('/afterlogin', 'livewire.after-login-page');
    Route::view('/login', 'livewire.login-page');
    Route::view('/register', 'livewire.register-page');
    Route::view('/dashboard', 'livewire.dashboard');
    Route::view('/admin', 'livewire.admin-login-page');
    Route::view('/dashboardAdmin', 'livewire.dashboard-admin');
    Route::get('/documents/{filename}', [AdminSidebar::class, 'serveDocument'])->name('documents.serve');
});
