<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Rating;
use App\Models\Director;
use App\Models\Language;
use App\Models\Screentime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'director_id',
        'title',
        'description',
        'mpaa_rating',
        'length',
        'release'
    ];

    public function director()
    {
        return $this->belongsTo(Director::class, 'director_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genres', 'movie_id', 'genre_id')->withTimestamps();
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'movie_languages', 'movie_id', 'language_id')->withTimestamps();
    }

    public function performers()
    {
        return $this->belongsToMany(Performer::class, 'movie_performers', 'movie_id', 'performer_id')->withTimestamps();
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function screentimes()
    {
        return $this->hasMany(Screentime::class);
    }
}
