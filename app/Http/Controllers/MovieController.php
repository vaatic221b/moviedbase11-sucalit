<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->get();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->findOrFail($id);
        return response()->json($movie);
    }

    public function moviesByGenre()
    {
        $movies = Movie::with('genres')->get();
        return response()->json($movies);
    }

    public function moviesByRating()
    {
        $movies = Movie::with(['ratings', 'ratings.reviewer'])->get();
        return response()->json($movies);
    }
}
