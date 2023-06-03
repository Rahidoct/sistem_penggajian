<?php

namespace Database\Seeders;

use App\Models\PotonganGaji;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PotonganGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PotonganGaji::create([
            'jenis_potongan' => 'Alpha',
            'jumlah_potongan' => 50000,
        ]);

        PotonganGaji::create([
            'jenis_potongan' => 'Izin',
            'jumlah_potongan' => 25000,
        ]);
    }
}
