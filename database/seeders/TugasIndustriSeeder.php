<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TugasIndustriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB ::table('tugas_industris')->insert([
            [
                'nama_lengkap' => 'Andi Saputra',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2000-05-15',
                'tempat_lahir' => 'Jakarta',
                'agama' => 'Islam',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Siti Aminah',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2001-08-22',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Jl. Sudirman No. 5, Bandung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Budi Santoso',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1999-12-30',
                'tempat_lahir' => 'Surabaya',
                'agama' => 'Kristen',
                'alamat' => 'Jl. Diponegoro No. 20, Surabaya',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Dewi Lestari',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2002-03-10',
                'tempat_lahir' => 'Yogyakarta',
                'agama' => 'Hindu',
                'alamat' => 'Jl. Malioboro No. 15, Yogyakarta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Rina Kusuma',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2000-11-05',
                'tempat_lahir' => 'Medan',
                'agama' => 'Buddha',
                'alamat' => 'Jl. Gatot Subroto No. 8, Medan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Agus Wijaya',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1998-07-18',
                'tempat_lahir' => 'Semarang',
                'agama' => 'Islam',
                'alamat' => 'Jl. Pandanaran No. 12, Semarang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Lina Marlina',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2001-09-25',
                'tempat_lahir' => 'Malang',
                'agama' => 'Kristen',
                'alamat' => 'Jl. Ijen No. 7, Malang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Maya Sari',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2002-10-30',
                'tempat_lahir' => 'Bogor',
                'agama' => 'Hindu',
                'alamat' => 'Jl. Pajajaran No. 9, Bogor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Fajar Nugroho',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2000-01-20',
                'tempat_lahir' => 'Depok',
                'agama' => 'Islam',
                'alamat' => 'Jl. Margonda No. 11, Depok',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Sari Indah',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '1999-04-12',
                'tempat_lahir' => 'Palembang',
                'agama' => 'Buddha',
                'alamat' => 'Jl. Jendral Sudirman No. 14, Palembang',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
