<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\TravailleurController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AdminController::class, 'index'])->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/redirects', [AdminController::class, 'index'])->middleware('auth');
Route::resource('regions', RegionController::class)->middleware('auth');;
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('secteurs', SecteurController::class)->middleware('auth');
Route::resource('agences', AgenceController::class)->middleware('auth');
Route::resource('travailleurs', TravailleurController::class)->middleware('auth');

Route::get('secteurRegion/{region}', [RegionController::class, 'regionWithSecteurs']);
Route::get('affecter/{id}', [RegionController::class, 'affecterSecteur']);
Route::get('secteurByAdmin/{id}', [SecteurController::class, 'secteurByAdmin']);