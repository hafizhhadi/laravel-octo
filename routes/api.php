<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\API\MovieController;
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

Route::prefix('v1')->group(function()
{
    Route::controller(MovieController::class)->group(function () {
        Route::get('/movie/genre', 'showGenre');
        Route::post('/movie/store', 'create');
        Route::post('/movie/rating', 'rateMovie');
    });
});
