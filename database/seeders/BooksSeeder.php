<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->delete();
        DB::table('books')->insert([
            [
                'judul' => 'Laskar Pelangi',
                'penerbit' => 'Bentang Pustaka',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2005,
                'jenis_buku' => 'Fiksi',
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'The Alchemist',
                'penerbit' => 'Harper Collins',
                'penulis' => 'Paulo Coelho',
                'tahun_terbit' => 1988,
                'jenis_buku' => 'Fiksi',
                'stok' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'The Great Gatsby',
                'penerbit' => 'Scribner',
                'penulis' => 'F. Scott Fitzgerald',
                'tahun_terbit' => 1925,
                'jenis_buku' => 'Klasik',
                'stok' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'To Kill a Mockingbird',
                'penerbit' => 'J.B. Lippincott & Co.',
                'penulis' => 'Harper Lee',
                'tahun_terbit' => 1960,
                'jenis_buku' => 'Klasik',
                'stok' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => '1984',
                'penerbit' => 'Secker & Warburg',
                'penulis' => 'George Orwell',
                'tahun_terbit' => 1949,
                'jenis_buku' => 'Dystopian',
                'stok' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
