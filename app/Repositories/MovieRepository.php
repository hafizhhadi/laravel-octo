<?php

namespace App\Repositories;

use App\Models\Movie;

class MovieRepository
{
    public function store($request, $directorId)
    {
        return Movie::create([
            'director_id' => $directorId,
            'title' => $request->title,
            'description' => $request->description,
            'mpaa_rating' => $request->mpaa_rating,
            'length' => $request->length,
            'release' => $request->release,
        ]);
    }

    public function findMovieTitle($name)
    {
        return Movie::whereTitle($name)->first();
    }

    public function searchPerformer($name)
    {
        return Movie::searchMovieByPerformer($name);
    }

    public function newMovie($date)
    {
        return Movie::newMovie($date);
    }
}

