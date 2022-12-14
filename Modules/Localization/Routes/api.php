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

// Route::middleware('auth:api')->get('/localization', function (Request $request) {
//     return $request->user();
// });

// Get Languages Api Route
Route::get('languages', 'LanguageController@getLanguagesApi');
Route::get('system/language', 'LanguageController@getSystemLanguageApi');