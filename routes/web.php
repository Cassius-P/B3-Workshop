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

Route::get('/idees', [App\Http\Controllers\IdeasController::class, 'getIdeas'])->middleware('App\Http\Middleware\Authenticate');
Route::get('/{x}', [App\Http\Controllers\CategoriesController::class, 'index'])->middleware('App\Http\Middleware\Authenticate');
Route::get('/{x}/{y}', [App\Http\Controllers\IdeaController::class, 'index'])->middleware('App\Http\Middleware\Authenticate');

Route::post('/xhr', [App\Http\Controllers\XHRController::class, 'newIdea']);

