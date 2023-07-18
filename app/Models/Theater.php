<?php

namespace App\Models;

use App\Models\Screentime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Theater extends Model
{
    use HasFactory;

    protected $fillable = [
       'name'
    ];

    public function screentimes()
    {
        return $this->hasMany(Screentime::class);
    }
}
