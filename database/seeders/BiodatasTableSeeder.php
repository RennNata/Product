<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->delete();
        DB::table('biodatas')->insert([
            [
                'nama_lengkap' => 'Jaup',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '081234567890',
                'email' => 'jaup@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Joff',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '082345678901',
                'email' => 'joff@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Njop',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '083456789012',
                'email' => 'njop@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Renn',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '084567890123',
                'email' => 'renn@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Usep',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '085678901234',
                'email' => 'usep@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Ucup',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '086789012345',
                'email' => 'ucup@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Otong',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '087890123456',
                'email' => 'otong@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Asep',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '088901234567',
                'email' => 'asep@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Ecep',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '089012345678',
                'email' => 'ecep@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Deden',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-11-24',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Taman Cibaduyut Indah, Bandung',
                'telepon' => '080123456789',
                'email' => 'deden@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
