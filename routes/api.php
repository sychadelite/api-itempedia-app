<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// PROTECTED ROUTES
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/auth/user', [AuthController::class, 'IndexAuthUser']);
});

// PUBLIC ROUTES
Route::get('/users', [AuthController::class, 'IndexUsers']);
