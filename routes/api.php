<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\ElectionOrganizerController;
use App\Http\Controllers\ElectorController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\VotesController;
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


// Route::group([
//     'prefix' => 'auth'
// ], function () {
//     Route::post('/login', 'AuthController@login');
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {


    Route::post('logout', [UserController::class, 'logout']);
    Route::post('refresh', [UserController::class, 'refresh']);
    Route::post('me', [UserController::class, 'me']);
});
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);


Route::resource('electionorganizers', ElectionOrganizerController::class)->middleware('cors');
Route::resource('elections', ElectionController::class)->middleware('cors');
Route::resource('electors', ElectorController::class)->middleware('cors');
Route::resource('options', OptionController::class)->middleware('cors');
Route::resource('questions', QuestionController::class)->middleware('cors');
Route::get('makevotes/{id}', [VotesController::class, 'increment'])->middleware('cors');
Route::resource('responses', ResponseController::class)->middleware('cors');
Route::resource('participants', ParticipantController::class)->middleware('cors');
