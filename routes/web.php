<?php

use App\Http\Controllers\MemoController;
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

Route::get('/', 'App\Http\Controllers\MemoController@index');
Route::post('/', 'App\Http\Controllers\MemoController@create');
Route::post('/destroy', 'App\Http\Controllers\MemoController@destroy');
