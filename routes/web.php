<?php

use App\Http\Controllers\backend\IndexController;
use App\Http\Controllers\frontend\CountriesController;
use App\Http\Controllers\frontend\DrakorController;
use App\Http\Controllers\frontend\GenresController;
use App\Http\Controllers\frontend\LandingController;
use App\Http\Controllers\backend\CountriesController as BCountriesController;
use App\Http\Controllers\backend\DrakorController as BDrakorController;
use App\Http\Controllers\backend\GenresController as BGenresController;
use App\Http\Controllers\backend\ReviewsController;
use App\Http\Controllers\backend\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('landingpage') ;
Route::post('/login', [LandingController::class, 'login']);
Route::post('/register', [LandingController::class, 'register']);
Route::post('/logout', [LandingController::class, 'logout'])->name('logout');
Route::resource('/countries', CountriesController::class);
Route::resource('/genres', GenresController::class);
Route::resource('/drakor', DrakorController::class);

Route::group( ['middleware'], function () {
        Route::get('/backend', [IndexController::class, 'dashboard']);
        Route::resource('/backend/countries', BCountriesController::class);
        Route::resource('/backend/genres', BGenresController::class);
        Route::resource('/backend/drakor', BDrakorController::class);
        Route::resource('/backend/reviews', ReviewsController::class);
        Route::resource('/backend/users', UsersController::class);
    }
);
