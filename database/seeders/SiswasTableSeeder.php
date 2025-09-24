<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'Jaup',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'kelas' => 'XI RPL 1',
                
            ],
            [
                'nama_lengkap' => 'Joff',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Njop',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'kelas' => 'XI RPL 1',
                
            ],
            [
                'nama_lengkap' => 'Renn',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'kelas' => 'XI RPL 1',
                
            ],
            [
                'nama_lengkap' => 'Usep',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'kelas' => 'XI RPL 1',
                
            ],
        ]);
    }
}
