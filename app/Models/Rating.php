<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $primaryKey = 'rev_id';
    public $incrementing = false;
    public $timestamps = false;

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class, 'rev_id', 'rev_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'mov_id', 'mov_id');
    }
}
