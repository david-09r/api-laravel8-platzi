<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v2')->group(function () {
    Route::apiResource('posts',
        \App\Http\Controllers\Api\V2\PostController::class
    )->only(['index', 'show', 'destroy']);
});