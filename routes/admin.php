<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\backend\AdminController::class, 'dashboard'])->name('dashboard');
    //auth
    Route::get('/logout', [\App\Http\Controllers\backend\AuthController::class, 'logout'])->name('logout');
    Route::get('/update', [\App\Http\Controllers\backend\AuthController::class, 'editAdminDetails'])->name('editAdminDetails');
    Route::post('/update', [\App\Http\Controllers\backend\AuthController::class, 'updateAdminDetails'])->name('updateAdminDetails');
    //crud
    Route::resource('/texts', \App\Http\Controllers\backend\TextController::class);
    Route::resource('/reviews', \App\Http\Controllers\backend\ReviewController::class);
    Route::resource('/orders', \App\Http\Controllers\backend\OrderController::class)->except('create');
    Route::resource('/plans', \App\Http\Controllers\backend\PlanController::class)->except('create');

    //deletion
    Route::get('/reviews/delete/{review}', [\App\Http\Controllers\backend\ReviewController::class,'delete'])->name('reviews.delete');


});

//auth
Route::get('admin/login', [\App\Http\Controllers\backend\AdminController::class, 'loginPage'])->name('loginPage');
Route::post('admin/login', [\App\Http\Controllers\backend\AuthController::class, 'login'])->name('login');
