<?php

use App\Http\Controllers\api\v1\PostApiController;


// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\TagController;
// use Illuminate\Support\Facades\Route;

// REST API (Restful API) => HTTP Standard
// REQUEST => GET< POST < DELETE < PUT < PATCH
// RESPONSE => 200, 201, 204, 400, 404, 500
Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class);
});