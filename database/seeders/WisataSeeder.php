<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wisata::create([
            'nama_tempat' => 'Alun-Alun Batu',
            'gambar' => 'http://127.0.0.1:8000/gambar-wisata/alun2batu.png',
        ]);
        Wisata::create([
            'nama_tempat' => 'Batu Night Spectacular',
            'gambar' => 'http://127.0.0.1:8000/gambar-wisata/bns.png',
        ]);
        Wisata::create([
            'nama_tempat' => 'Bromo',
            'gambar' => 'http://127.0.0.1:8000/gambar-wisata/bromo.png',
        ]);
        Wisata::create([
            'nama_tempat' => 'Coban Rondo',
            'gambar' => 'http://127.0.0.1:8000/gambar-wisata/coban_rondo.png',
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Angkut',
            'gambar' => 'http://127.0.0.1:8000/gambar-wisata/museum.png',
        ]);
        Wisata::create([
            'nama_tempat' => 'Paralayang',
            'gambar' => 'http://127.0.0.1:8000/gambar-wisata/paralayang.png',
        ]);
        Wisata::create([
            'nama_tempat' => 'Selecta',
            'gambar' => 'http://127.0.0.1:8000/gambar-wisata/selecta.png',
        ]);
    }
}