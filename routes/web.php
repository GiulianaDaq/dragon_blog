<?php

use App\Http\Controllers\AdventureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Models\Adventure;

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

Route::get('/', ([PublicController::class, 'welcome']))->name('welcome');
Route::get('/userProfile', ([PublicController::class, 'userProfile']))->name('user.profile');


Route::get('/adventure/create' , ([AdventureController::class, 'create']))->name('adventure.create');
Route::get('/adventure/index' , ([AdventureController::class, 'index']))->name('adventure.index');
Route::get('/adventure/show{adventure}' , ([AdventureController::class, 'show']))->name('adventure.show');
Route::get('/adventure/category/{category}', [AdventureController::class, 'indexCategory'])->name('adventure.index-category');
Route::get('/adventure/edit/{adventure}', [AdventureController::class, 'edit'])->name('adventure.edit');

