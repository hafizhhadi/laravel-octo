<?php

namespace App\Repositories;

use App\Models\Rating;

class RatingRepository
{
    public function store($request, $userId, $movieId)
    {
        return Rating::create([
            'user_id' => $userId,
            'movie_id' => $movieId,
            'rating' => $request->rating,
            'description' => $request->rating_description
        ]);
    }
}