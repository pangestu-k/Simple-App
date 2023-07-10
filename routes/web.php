<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
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
})->name('home');;

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register-store', [AuthController::class, 'register_store'])->name('user.register');
    Route::post('login-store', [AuthController::class, 'login_store'])->name('user.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('user.logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('produk', [ProdukController::class, 'list'])->name('produk.list');
});
