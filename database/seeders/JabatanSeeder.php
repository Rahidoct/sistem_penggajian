<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tambahkan data jabatan
        $jabatan = [
            [
                'nama' => 'Admin',
                'gaji_pokok' => 5000000,
                'transportasi' => 1000000,
                'uang_makan' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Team Leader',
                'gaji_pokok' => 3000000,
                'transportasi' => 500000,
                'uang_makan' => 25000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Jabatan::insert($jabatan);
    }
}
