<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\System\CountryController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', IndexController::class)->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/system', [SystemController::class, 'index'])->name('system');
});

Route::prefix('users')->middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::get('/buyers', [UserController::class, 'buyers'])->name('users.buyers');
    Route::get('/sellers', [UserController::class, 'sellers'])->name('users.sellers');
});

Route::prefix('products')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::get('/active', [ProductController::class, 'active'])->name('products.active');
    Route::get('/not_active', [ProductController::class, 'not_active'])->name('products.not_active');
});

Route::prefix('system')->middleware(['auth'])->group(function () {
    Route::prefix('country')->group(function () {
        Route::get('/', [CountryController::class, 'index'])->name('system.country');
        Route::get('/create', [CountryController::class, 'create'])->name('system.country.create');
        Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('system.country.edit');
    });
});

require __DIR__ . '/auth.php';
