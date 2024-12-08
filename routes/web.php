<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/job', [JobController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::get('/blog/delete', [PostController::class, 'delete']);
Route::get('/blog/{id}', [PostController::class, 'show']);

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/create', [TagController::class, 'create']);
Route::get('/tags/test-many', [TagController::class, 'testManyToMany']);