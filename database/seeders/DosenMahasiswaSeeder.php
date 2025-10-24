<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class DosenMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen1 = Dosen::create([
            'nama' => 'Dr. Ahmad',
             'nipd' => '123456',
        ]);
        
        $dosen2 = Dosen::create([
            'nama' => 'Prof. Zaskia',
             'nipd' => '654321',
        ]);

        $dosen1->mahasiswas()->createMany([
            ['nama' => 'Budi Santoso', 'nim' => 'M001'],
            ['nama' => 'Siti Aminah', 'nim' => 'M002'],
        ]);
        $dosen2->mahasiswas()->createMany([
            ['nama' => 'Andi Wijaya', 'nim' => 'M003'],
            ['nama' => 'Rina Kusuma', 'nim' => 'M004'],
        ]);
    }
}
