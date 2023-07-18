<?php

namespace App\Models;

use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Screentime extends Model
{
    use HasFactory;

    protected $table = 'screentimes';

    protected $fillable = [
        'movie_id',
        'theater_id',
        'start_date_time',
        'end_date_time'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }
}
