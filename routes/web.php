<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\OverviewController;
use App\Http\Controllers\Dashboard\AdminAreaController;

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

// Basic
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/home', function () {
    return view('welcome');
});

// Auth
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

// User
Route::get('/dashboard', [OverviewController::class, 'index'])->name('dashboard');

// Admin
Route::get('/dashboard/admin', [App\Http\Controllers\Dashboard\Admin\OverviewController::class, 'index'])->name('dashboard.admin');
Route::get('/dashboard/admin/users', [App\Http\Controllers\Dashboard\Admin\UsersController::class, 'index'])->name('dashboard.admin.users');
Route::get('/dashboard/admin/users/{id}', [App\Http\Controllers\Dashboard\Admin\UsersController::class, 'edit'])->name('dashboard.admin.users.edit');
Route::post('/dashboard/admin/users/{id}', [App\Http\Controllers\Dashboard\Admin\UsersController::class, 'store'])->name('dashboard.admin.users.edit');
Route::post('/dashboard/admin/users/{id}/credits', [App\Http\Controllers\Dashboard\Admin\UsersController::class, 'credits'])->name('dashboard.admin.users.edit.credits');
Route::get('/dashboard/admin/users/{id}/delete', [App\Http\Controllers\Dashboard\Admin\UsersController::class, 'destroy'])->name('dashboard.admin.users.edit.delete');
