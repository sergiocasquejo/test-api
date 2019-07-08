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

Route::prefix('v1')->group(function() {
    Route::get('people', 'PeopleController@index');
    Route::post('people', 'PeopleController@store');
    Route::get('people/{id}', 'PeopleController@show');
    Route::get('films', 'FilmController@index');
    Route::post('films', 'FilmController@store');
    Route::get('films/{id}', 'FilmController@show');
});
