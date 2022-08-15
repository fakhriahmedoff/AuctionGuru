<?php

use App\Http\Controllers\site\HomepageController;
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

Route::get('/', [HomepageController::class, 'home'])->name('home');
Route::get('/order-now', [\App\Http\Controllers\site\OrderController::class, 'index'])->name('orderPage');
Route::post('/order-now', [\App\Http\Controllers\site\OrderController::class, 'order'])->name('order');
