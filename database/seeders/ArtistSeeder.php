<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Artist::factory()->has(Album::factory()->count(10))->create();
        Artist::factory()->has(Song::factory()->count(10))->create();
    }
}
