<?php

use App\Http\Controllers\BrowseController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\LatestController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\RandomController;
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

Route::get('/', [DrinkController::class, 'index']);
Route::get('/popular', [PopularController::class, 'index']);
Route::get('/latest', [LatestController::class, 'index']);
Route::get('/random', [RandomController::class, 'index']);
Route::get('/browse/{name}', [BrowseController::class, 'index']);
Route::get('/drink/{id}', [DrinkController::class, 'show']);
Route::get('ingredient/{name}', [IngredientController::class, 'show']);

