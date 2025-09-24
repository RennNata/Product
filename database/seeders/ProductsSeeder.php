<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Adem Sari',
                'description' => 'Minuman segar',
                'price' => 8000,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mountea',
                'description' => 'Teh rasa buah',
                'price' => 1000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
