<?php

namespace App\Repositories;

use App\Models\Genre;
use Exception;

class GenreRepository
{
    public function findGenreName($name)
    {
        return Genre::whereName($name)->first();
    }

    public function store($name)
    {
        return Genre::create([
            'name' => $name
        ]);
    }

    public function getMovieByGenre($genre)
    {
        if (!$data = $this->findGenreName($genre)) {
            throw new Exception('Genre Not Found');
        }
        return $data->movies()->get();
    }
}