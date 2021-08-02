<?php

use App\Http\Controllers\GypsyController;
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
Route::get('/gypsy', [GypsyController::class, 'index']);
Route::get('/gypsy/create', [GypsyController::class, 'create']);
Route::post('/gypsy', [GypsyController::class, 'store']);
Route::get('/gypsy/{id}', [GypsyController::class, 'show']);
