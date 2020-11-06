<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlbumResourceCollection;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //
    public function albums()
    {
        return AlbumResourceCollection::make(Album::all());
    }
}
