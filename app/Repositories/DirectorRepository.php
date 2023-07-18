<?php

namespace App\Repositories;

use App\Models\Director;

class DirectorRepository
{
    public function findDirectorName($name)
    {
        return Director::whereName($name)->first();
    }

    public function store($request)
    {
        return Director::create([
            'name' => $request->director
        ]);
    }
}