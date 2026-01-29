<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AnimalsController;
use App\Http\Controllers\Admin\AgriTechController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

// FRONTEND ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/animals', [HomeController::class, 'animals'])->name('animals');

// AUTH ROUTES
Auth::routes();

// ADMIN PANEL ROUTES
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');

    // RESOURCES
    Route::resource('users', UsersController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::resource('news', NewsController::class);
    Route::resource('animals', AnimalsController::class);
    Route::resource('agritech', AgriTechController::class);

});

