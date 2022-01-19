<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
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

require __DIR__ . '/auth.php';
