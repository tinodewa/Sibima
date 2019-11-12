<?php

use App\Galeri;
use Illuminate\Database\Seeder;

class GalerisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Galeri::create([
            'caption' => 'Proses ProPer SIKOMBATAN',
            'image_url' => '1573568065.proses_proper.jpg'
        ]);
    }
}
