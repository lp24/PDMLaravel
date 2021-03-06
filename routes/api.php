<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/days', 'DayApiController@index');
Route::get('/day/{id}', 'DayApiController@showDay');
Route::post('/day/', 'DayApiController@storeDay');

Route::get('/blocks', 'BlockApiController@getBlocks');
Route::get('/blocks/{id}', 'BlockApiController@getDayBlocks');

Route::get('/block/{id}', 'BlockApiController@showBlock');
Route::patch('/block/{id}','BlockApiController@updateBlock');
Route::post('/block/', 'BlockApiController@storeBlock');



