<?php

use App\Http\Controllers\ElectionController;
use App\Http\Controllers\ElectionOrganizerController;
use App\Http\Controllers\ElectorController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegController;

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





Route::post('user', [UserRegController::class, 'store'])->middleware('cors');
Route::post('election_organizer', [ElectionOrganizerController::class, 'store']);
Route::post('election', [ElectionController::class, 'store']);
Route::post('elector', [ElectorController::class, 'store']);
Route::post('option', [OptionController::class, 'store']);
Route::post('question', [QuestionController::class, 'store']);
