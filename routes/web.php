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
Route::get('/gypsy', function () {

    $gypsies = [
        ['type' => 'black', 'base' => 'sweet'],
        ['type' => 'blue', 'base' => 'sweet'],
        ['type' => 'yellow', 'base' => 'sweet'],
        ['type' => 'red', 'base' => 'sweet']
    ];
    
    return view('gypsy',
     ['gypsies' => $gypsies,
    'name' => request('name'),
    'age' => request('age')
    ]);
});
