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
    }
}
