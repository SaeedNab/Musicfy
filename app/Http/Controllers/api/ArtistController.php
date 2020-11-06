<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistResourceCollection;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //
    public function artists()
    {
        return ArtistResourceCollection::make(Artist::all());
    }
}
