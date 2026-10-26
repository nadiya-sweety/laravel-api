<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Data dibuat jadi method sendiri supaya bisa dipakai index() dan show()
    private function dataProduk()
    {
        return [
            [
                'id' => '01',
                'nama' => 'Makanan',
                'produk' => [
                    ['id' => '001', 'nama' => 'Bakso',  'harga' => 15000],
                    ['id' => '002', 'nama' => 'Seblak', 'harga' => 12000],
                    ['id' => '003', 'nama' => 'Pecel',  'harga' => 10000],
                ],
            ],
            [
                'id' => '02',
                'nama' => 'Minuman',
                'produk' => [
                    ['id' => '004', 'nama' => 'Kopi',   'harga' => 8000],
                    ['id' => '005', 'nama' => 'Susu',   'harga' => 7000],
                    ['id' => '006', 'nama' => 'Matcha', 'harga' => 15000],
                ],
            ],
            [
                'id' => '03',
                'nama' => 'Alat Tulis',
                'produk' => [
                    ['id' => '007', 'nama' => 'Buku',      'harga' => 10000],
                    ['id' => '008', 'nama' => 'Pensil',    'harga' => 8000],
                    ['id' => '009', 'nama' => 'Penggaris', 'harga' => 12000],
                ],
            ],
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->dataProduk(), 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json($request->all(), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        foreach ($this->dataProduk() as $kategori) {
            foreach ($kategori['produk'] as $produk) {
                if ($produk['id'] == $id) {
                    return response()->json($produk, 200, [], JSON_PRETTY_PRINT);
                }
            }
        }

        return response()->json([
            'pesan' => 'Produk dengan ID ' . $id . ' tidak ditemukan',
        ], 404, [], JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}