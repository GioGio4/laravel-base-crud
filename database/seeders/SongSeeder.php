<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Song();
        $song->title = 'Black';
        $song->album = 'Ten';
        $song->author = 'Pearl Jam';
        $song->editor = 'Epic';
        $song->length = 5.43;
        $song->poster = 'https://picsum.photos/200';

        $song->save();

        $song = new Song();
        $song->title = 'Chlorine';
        $song->album = 'Trench';
        $song->author = 'Twenty One Pilots';
        $song->editor = 'Fueled by Ramen';
        $song->length = 5.24;
        $song->poster = 'https://picsum.photos/200';

        $song->save();

        $song = new Song();
        $song->title = 'Auto Pilot';
        $song->album = 'Rated R';
        $song->author = 'Queens of the Stone Age';
        $song->editor = 'Interscope';
        $song->length = 4.02;
        $song->poster = 'https://picsum.photos/200';

        $song->save();
    }
}
