<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function findUserName($username)
    {
        return User::whereName($username)->first();
    }
}