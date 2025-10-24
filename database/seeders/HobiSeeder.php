<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Hobi;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat beberapa hobi
        $hobi1 = Hobi::create(['nama_hobi' => 'Membaca']);
        $hobi2 = Hobi::create(['nama_hobi' => 'Bersepeda']);
        $hobi3 = Hobi::create(['nama_hobi' => 'Bernyanyi']);
        $hobi4 = Hobi::create(['nama_hobi' => 'Coding']);

        // Ambil beberapa mahasiswa untuk dihubungkan dengan hobi
        $mahasiswa1 = Mahasiswa::all();

        // Assign hobi ke mahasiswa secara acak
        foreach ($mahasiswa1 as $mhs) {
            $randomHobi=[$hobi1->id, $hobi2->id, $hobi3->id, $hobi4->id];
            shuffle($randomHobi);
            $mhs->hobis()->attach(array_slice($randomHobi, 0, rand(1, 3)));
        }
    }
}
