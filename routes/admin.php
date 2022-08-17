<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\backend\AdminController::class, 'dashboard'])->name('dashboard');
    //auth
    Route::get('/logout', [\App\Http\Controllers\backend\AuthController::class, 'logout'])->name('logout');
    Route::get('/update', [\App\Http\Controllers\backend\AuthController::class, 'editAdminDetails'])->name('editAdminDetails');
    Route::post('/update', [\App\Http\Controllers\backend\AuthController::class, 'updateAdminDetails'])->name('updateAdminDetails');
    //crud
    Route::resource('/texts', \App\Http\Controllers\backend\TextController::class);
    Route::get('/texts/delete/{text}', [\App\Http\Controllers\backend\TextController::class, 'delete'])->name('texts.delete');


});

//auth
Route::get('admin/login', [\App\Http\Controllers\backend\AdminController::class, 'loginPage'])->name('loginPage');
Route::post('admin/login', [\App\Http\Controllers\backend\AuthController::class, 'login'])->name('login');
