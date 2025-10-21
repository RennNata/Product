<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Tips cepat pintar',
                'content' => 'Lorem ipsum.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Pembangun Visi Misi Sukses',
                'content' => 'Lorem ipsum.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
