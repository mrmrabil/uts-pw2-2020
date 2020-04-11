<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            [
                'nama_produk' => 'Susu Cap Sisfo',
                'kategori' => 'Minuman',
                'harga' => 40000,
            ],
            [
                'nama_produk' => 'SisfoMie',
                'kategori' => 'Makanan',
                'harga' => 13000,
            ],
            [
                'nama_produk' => 'Sisfo Biskuit',
                'kategori' => 'Makanan',
                'harga' => 16000,
            ],
            [
                'nama_produk' => 'SisfoPaper A4 80g',
                'kategori' => 'Alat Tulis',
                'harga' => 35000,
            ],
        ];

        //kemudian tampilkan dalam view
        return view('index', ['produk' => $produk]);
    }

    public function tambah(Request $request)
    {
        $new_data = [
            'nama_produk' => $request['nama-produk'],
            'kategori' => $request['kategori'],
            'harga' => $request['harga'],
        ];

        return redirect()->route('success')->with(['new_data' => $new_data]);
    }

    public function detail()
    {
        // tampilkan halaman success seperti yang ada di template
        $new_data = session()->get('new_data');
        return view('success', ['new_data' => $new_data]);
    }
}
