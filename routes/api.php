<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomerController;

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




Route::group(['prefix'=> 'v1'], function() {
    Route::get('customer', [CustomerController::class, 'index']);

    Route::post('customer', [CustomerController::class, 'add']);

    Route::get('customer/{id}', [CustomerController::class, 'show']);

    Route::patch('customer/{id}', [CustomerController::class, 'update']);

    Route::delete('customer/{id}', [CustomerController::class, 'destroy']);
});



Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {

    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\AuthController::class, 'me']);

});