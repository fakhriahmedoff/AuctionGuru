<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\backend\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [\App\Http\Controllers\backend\AuthController::class, 'logout'])->name('logout');

});

//auth
Route::get('admin/login', [\App\Http\Controllers\backend\AdminController::class, 'loginPage'])->name('loginPage');
Route::post('admin/login', [\App\Http\Controllers\backend\AuthController::class, 'login'])->name('login');
