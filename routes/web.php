<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/store/', [PostController::class, 'store']);
Route::get('/post/{slug}', [PostController::class, 'show']);
