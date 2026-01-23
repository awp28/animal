<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AnimalsController;
use App\Http\Controllers\Admin\FeedsController; 
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/animals', [HomeController::class, 'animals'])->name('animals');
Route::get('/view', [HomeController::class, 'view'])->name('view');
Auth::routes();

// Admin routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::resources([
        'users'        => UsersController::class,
        'roles'        => RolesController::class,
        'permissions'  => PermissionsController::class,
        'news'         => NewsController::class,
        'animals'      => AnimalsController::class,
        'feeds'        => FeedsController::class, // <-- to‘g‘riladik
    ]);

});
