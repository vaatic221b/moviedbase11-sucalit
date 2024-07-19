<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;
// BCL4 push 
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/{id}', [MovieController::class, 'show']); //http://127.0.0.1:8000/api/movies/901 example movie
    Route::get('/directors/{id}', [DirectorController::class, 'show']); //http://127.0.0.1:8000/api/directors/201 example director
    Route::get('/actors/{id}', [ActorController::class, 'show']); //http://127.0.0.1:8000/api/actors/101 example actor
    Route::get('/movies/genres', [MovieController::class, 'moviesByGenre']); //NEEDS FIXING
    Route::get('/movies/ratings', [MovieController::class, 'moviesByRating']); //NEEDS FIXING
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);