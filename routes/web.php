<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [LoginController::class, 'index'])->name('/');
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('guest-dashboard', [LoginController::class, 'guestDashboard'])->name('guest.dashboard');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('agent-login', [LoginController::class, 'login'])->name('login.agent');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


