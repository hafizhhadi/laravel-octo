<?php

namespace App\Repositories;

use App\Models\Language;

class LanguageRepository
{
    public function findLanguageName($name)
    {
        return Language::whereName($name)->first();
    }

    public function store($name)
    {
        return Language::create([
            'name' => $name
        ]);
    }
}