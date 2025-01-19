<?php

use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\PostApiController;


// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\TagController;
// use Illuminate\Support\Facades\Route;

// REST API (Restful API) => HTTP Standard
// REQUEST => GET< POST < DELETE < PUT < PATCH
// RESPONSE => 200, 201, 204, 400, 404, 500

// POST /v1/auth/login
// POST /v1/auth/refresh
// GET /v1/auth/me
// POST /v1/auth/logout

Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class)->middleware('auth:api');

    Route::prefix('auth')->group(function() {
        Route::post('login', [AuthController::class, 'login']);

        // Only if I am authenticated with JWT (Authorization Header)
        Route::middleware('auth:api')->group(function() {
            Route::post('refresh', [AuthController::class, 'refresh']);
            Route::get('me', [AuthController::class, 'me']);
            Route::post('logout', [AuthController::class, 'logout']);
        });

    });
});