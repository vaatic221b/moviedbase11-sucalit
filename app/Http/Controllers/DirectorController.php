<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function show($id)
    {
        $director = Director::with('movies')->findOrFail($id);
        return response()->json($director);
    }
}
