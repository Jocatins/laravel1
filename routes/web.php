<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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


Route::post('user', [User::class, 'viewData']);

Route::view('no-access', 'noaccess');
Route::view('about', 'about');
//Group middleware
Route::group(['middleware' => ['protectedPage']], function() {
    Route::view('login', 'user');
    Route::get('/', function () {
    
        return view('welcome');
    });
});