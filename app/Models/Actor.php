<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $primaryKey = 'act_id';
    public $incrementing = false;
    public $timestamps = false;

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'actor_movie', 'act_id', 'mov_id');
    }
}
