<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SongResourceCollection;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    //
    public function songs()
    {
        return SongResourceCollection::make(Song::all());
    }
}
