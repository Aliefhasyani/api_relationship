<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('comment', CommentController::class);
Route::apiResource('profile', ProfileController::class);