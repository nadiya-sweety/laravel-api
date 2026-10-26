<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

/**
 * Opsional, supaya tabel products ada isinya untuk screenshot.
 * Data diambil dari dummy di ProductController milikmu.
 * Sesuaikan nama kolom jika tabel products-mu berbeda.
 */
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Makanan'    => [['Bakso', 15000], ['Seblak', 12000], ['Pecel', 10000]],
            'Minuman'    => [['Kopi', 8000], ['Susu', 7000], ['Matcha', 15000]],
            'Alat Tulis' => [['Buku', 10000], ['Pensil', 8000], ['Penggaris', 12000]],
        ];

        foreach ($data as $namaKategori => $produk) {
            $kategori = Category::where('nama', $namaKategori)->first();

            foreach ($produk as [$nama, $harga]) {
                Product::updateOrCreate(
                    ['nama' => $nama],
                    ['harga' => $harga, 'category_id' => $kategori?->id]
                );
            }
        }
    }
}
