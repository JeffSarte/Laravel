<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('client','ClientController@store');
Route::get('client','ClientController@index');
Route::post('client/{id}','ClientController@update');
Route::delete('client/{id}','ClientController@destroy');


Route::post('house','HouseController@store');


Route::delete('house/{id}','HouseController@destroy');
