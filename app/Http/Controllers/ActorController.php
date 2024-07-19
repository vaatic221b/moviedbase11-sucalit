<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function show($id)
    {
        $actor = Actor::with('movies')->findOrFail($id);
        return response()->json($actor);
    }
}
