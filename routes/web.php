<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\BreedsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RegionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/animals', [HomeController::class, 'animals'])->name('animals');
Route::get('/ad/{ad}', [HomeController::class, 'showAd'])->name('ad.show');
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
        'regions'      => RegionsController::class,
        'categories'   => CategoriesController::class,
        'breeds'       => BreedsController::class,
        'ads'          => AdsController::class,
    ]);

});
