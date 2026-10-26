<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Tantangan: data tetap (nama kategori nyata), bukan acak
        $kategori = ['Minuman', 'Makanan', 'Alat Tulis', 'Elektronik', 'Pakaian'];

        foreach ($kategori as $nama) {
            // updateOrCreate -> aman dijalankan berulang, tidak membuat duplikat
            Category::updateOrCreate(['nama' => $nama]);
        }
    }
}
