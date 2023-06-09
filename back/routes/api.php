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

//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('programs', App\Http\Controllers\API\ProgramController::class);
Route::resource('faxdoc', App\Http\Controllers\API\FaxDocController::class);

Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
