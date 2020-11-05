<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Album::factory()->has(Artist::factory()->count(10))->create();
        Album::factory()->has(Song::factory()->count(10))->create();
    }
}
