<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Kriteria::create([
                'nama_kriteria' => 'Jarak',
                'wisata_id' => $i,
            ]);
            Kriteria::create([
                'nama_kriteria' => 'Sarana',
                'wisata_id' => $i,
            ]);
            Kriteria::create([
                'nama_kriteria' => 'Biaya',
                'wisata_id' => $i,
            ]);
            Kriteria::create([
                'nama_kriteria' => 'Jam Operasional',
                'wisata_id' => $i,
            ]);
        }
    }
}