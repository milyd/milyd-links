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

// Main routes
Route::get('/', 'App\Http\Controllers\PageController@showIndex');
Route::get('/link/{slug}', 'App\Http\Controllers\LinkController@redirectToURL');
Route::get('/api', 'App\Http\Controllers\PageController@apiPage');

// API
Route::get('/api/getAllLinks', 'App\Http\Controllers\LinkController@returnAllData');
Route::get('/api/getLink/{slug}', 'App\Http\Controllers\LinkController@returnSpecificData');