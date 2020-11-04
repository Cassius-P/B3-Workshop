<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/idees', [App\Http\Controllers\IdeasController::class, 'getIdeas']);
Route::get('/{x}', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/{x}/{y}', [App\Http\Controllers\IdeaController::class, 'index']);

Route::post('/xhr', [App\Http\Controllers\XHRController::class, 'newIdea']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
