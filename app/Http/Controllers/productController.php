<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Data dummy produk (dipakai bersama oleh index() dan show())
    private function dataProduk()
    {
        return [
            ['id' => '001', 'nama' => 'Bakso',     'kategori' => 'Makanan',    'harga' => 15000],
            ['id' => '002', 'nama' => 'Seblak',    'kategori' => 'Makanan',    'harga' => 12000],
            ['id' => '003', 'nama' => 'Pecel',     'kategori' => 'Makanan',    'harga' => 10000],
            ['id' => '004', 'nama' => 'Kopi',      'kategori' => 'Minuman',    'harga' => 8000],
            ['id' => '005', 'nama' => 'Susu',      'kategori' => 'Minuman',    'harga' => 7000],
            ['id' => '006', 'nama' => 'Matcha',    'kategori' => 'Minuman',    'harga' => 15000],
            ['id' => '007', 'nama' => 'Buku',      'kategori' => 'Alat Tulis', 'harga' => 10000],
            ['id' => '008', 'nama' => 'Pensil',    'kategori' => 'Alat Tulis', 'harga' => 8000],
            ['id' => '009', 'nama' => 'Penggaris', 'kategori' => 'Alat Tulis', 'harga' => 12000],
        ];
    }

    // GET /products -> semua produk
    public function index()
    {
        return response()->json
        ($this->dataProduk(), 200, [], JSON_PRETTY_PRINT);
    }

    // GET /products/{id} -> satu produk sesuai ID
    public function show($id)
    {
        foreach ($this->dataProduk() as $produk) {
            if ($produk['id'] == $id) {
                return response()->json($produk, 200, [], JSON_PRETTY_PRINT);
            }
        }

        // Jika ID tidak ditemukan -> 404
        return response()->json([
            'pesan' => 'Produk dengan ID ' . $id . ' tidak ditemukan',
        ], 404, [], JSON_PRETTY_PRINT);
    }
}