<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function songs()
    {
        return $this->belongsToMany();
    }

    public function albums()
    {
        return $this->belongsToMany();
    }
}
