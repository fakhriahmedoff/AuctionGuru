<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware('auth')->name('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'dsa';
    });
});

Route::get('admin', [\App\Http\Controllers\backend\AuthController::class,'loginPage'])->name('login');
