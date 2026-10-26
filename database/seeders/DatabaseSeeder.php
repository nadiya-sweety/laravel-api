<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan penting: kategori dulu, baru produk
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
