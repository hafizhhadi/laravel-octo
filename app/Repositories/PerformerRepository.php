<?php

namespace App\Repositories;

use App\Models\Performer;

class PerformerRepository
{
    public function findPerformerName($name)
    {
        return Performer::whereName($name)->first();
    }

    public function store($name)
    {
        return Performer::create([
            'name' => $name
        ]);
    }
}