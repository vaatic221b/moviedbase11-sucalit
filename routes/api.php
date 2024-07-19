<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;
// test
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/{id}', [MovieController::class, 'show']);
    Route::get('/directors/{id}', [DirectorController::class, 'show']);
    Route::get('/actors/{id}', [ActorController::class, 'show']);
    Route::get('/movies/genres', [MovieController::class, 'moviesByGenre']); //needs fixing
    Route::get('/movies/ratings', [MovieController::class, 'moviesByRating']); //needs fixing
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);