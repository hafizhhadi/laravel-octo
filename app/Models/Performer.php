<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Performer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_performer', 'performer_id', 'movie_id')->withTimestamps();
    }
}
