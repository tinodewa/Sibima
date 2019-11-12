<?php

Use App\Kota;
use Illuminate\Database\Seeder;

class KotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Default provinsi_id
    const KALIMANTAN_TIMUR = 1;
    const KALIMANTAN_UTARA = 2;
    const KALIMANTAN_SELATAN = 3;
    const KALIMANTAN_TENGAH = 4;
    const KALIMANTAN_BARAT = 5;

    public function run()
    {
        // Kalimantan Timur
        Kota::create([
            'nama' => 'Kabupaten Kutai Timur',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kabupaten Berau',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kabupaten Kutai Barat',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kabupaten Kutai Kartanegara',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kabupaten Kutai Timur',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kabupaten Mahakam Ulu',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kabupaten Paser',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kota Balikpapan',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kota Bontang',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);
        Kota::create([
            'nama' => 'Kota Samarinda',
            'provinsi_id' => self::KALIMANTAN_TIMUR
        ]);

        

    }
}
