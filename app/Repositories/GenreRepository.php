<?php

namespace App\Repositories;

use App\Models\Genre;

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
}