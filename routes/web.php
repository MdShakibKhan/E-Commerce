<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, "index"])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, "admin"])->name('dashboard');
    Route::get('/add-product', [AdminController::class, "creteProduct"])->name('add.product');
    Route::get('/manage-product', [AdminController::class, "manageProduct"])->name('manage.product');
    Route::post('/create-product', [AdminController::class, "storeProduct"])->name('create.product');
});
