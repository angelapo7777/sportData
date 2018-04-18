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

Route::patch('match', 'AdminMatchesController@updateScore');
Route::post('match', 'AdminMatchesController@store'); // TODO use another method to store
Route::get('championships/{sport_id}', 'AdminChampionshipsController@getChampionships');
Route::get('seasons/{championship_id}', 'AdminSeasonsController@getSeasons');
Route::get('matchdays/{season_id}', 'AdminMatchdaysController@getMatchdays');
Route::get('teams/{sport_id}', 'AdminTeamsController@getTeams');
