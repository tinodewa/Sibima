<?php

use App\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Provinsi::create([
            'nama' => 'Kalimantan Timur'
        ]);
        Provinsi::create([
            'nama' => 'Kalimantan Utara'
        ]);
        Provinsi::create([
            'nama' => 'Kalimantan Selatan'
        ]);
        Provinsi::create([
            'nama' => 'Kalimantan Tengah'
        ]);
        Provinsi::create([
            'nama' => 'Kalimantan Barat'
        ]);
    }
}
