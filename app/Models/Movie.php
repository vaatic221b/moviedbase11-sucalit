<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $primaryKey = 'mov_id';
    public $incrementing = false;
    public $timestamps = false;

    public function directors()
    {
        return $this->belongsToMany(Director::class, 'director_movie', 'mov_id', 'dir_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'actor_movie', 'mov_id', 'act_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie', 'mov_id', 'gen_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'mov_id', 'mov_id');
    }
}

