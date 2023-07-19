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
        return $this->belongsTo(Theater::class, 'theater_id');
    }

    public function scopeFilterByDate($query, $date)
    {
        return $query->whereDate('start_date_time', '=', $date);
    }

    public function scopeFilterByDateTime($query, $request)
    {
        return $query->where(function ($query) use ($request) {
            $query->whereBetween('start_date_time', [$request->time_start, $request->time_end])
                ->orWhereBetween('end_date_time', [$request->time_start, $request->time_end]);
        });
    }
}
