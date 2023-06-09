<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\{
    ClientsController,
    AddressController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
|   Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
|
*/

/** Group Clients v1 */
Route::prefix('v1')->group(function() {
    Route::prefix('clients')->group(function (){
        Route::get('/', [ClientsController::class, 'index']);
        Route::get('/show/{id}', [ClientsController::class, 'show']);
        Route::post('/store', [ClientsController::class, 'store']);
        Route::put('/update/{id}', [ClientsController::class, 'update']);
        Route::delete('/destroy/{id}', [ClientsController::class, 'destroy']);
    });
});

/** Group States v1 */
Route::prefix('v1')->group(function() {
    Route::prefix('states')->group(function (){
        Route::get('/', [AddressController::class, 'fetchStates']);
    });

    Route::prefix('cities')->group(function (){
        Route::get('/', [AddressController::class, 'fetchCities']);
    });
});