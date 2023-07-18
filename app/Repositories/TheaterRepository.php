<?php

namespace App\Repositories;

use App\Models\Theater;

class TheaterRepository
{
    public function getTheaterName($name)
    {
        return Theater::whereName($name)->first();
    }
}