<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\pokemonsController;
use App\Http\Controllers\propertyController;
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

Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // 查詢所有球隊
    Route::get('property', [propertyController::class, 'api_property']);

    Route::patch('property', [propertyController::class, 'api_update']);
    // 刪除指定球隊
    Route::delete('property', [propertyController::class, 'api_delete']);
    // 查詢所有球員
    Route::get('pokemons', [pokemonsController::class, 'api_pokemons']);
    // 刪除指定球員
    Route::delete('pokemons', [pokemonsController::class, 'api_delete']);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
