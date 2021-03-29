<?php

use App\Http\Controllers\ElectionController;
use App\Http\Controllers\ElectionOrganizerController;
use App\Http\Controllers\ElectorController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisteredUserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('/login', 'AuthController@login');
});





Route::resource('registeredusers', RegisteredUserController::class)->middleware('cors');
Route::resource('electionorganizers', ElectionOrganizerController::class)->middleware('cors');
Route::resource('elections', ElectionController::class)->middleware('cors');
Route::resource('electors', ElectorController::class)->middleware('cors');
Route::resource('options', OptionController::class)->middleware('cors');
Route::resource('questions', QuestionController::class)->middleware('cors');
