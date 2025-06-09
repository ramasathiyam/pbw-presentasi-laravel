<?php

namespace App\Http\Controllers;

use App\Models\Tambah;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function index(){
        return view('Tambah');
    }

    public function Tambah(Request $request)
    {
        $request->validate([
            'NamaBarang' => 'required|string',
            'JenisBarang' => 'required|string',
            'Merk' => 'required|string',
            'Stok' => 'required|integer|min:1',
            'Harga' => 'required|integer|min:1000',
        ], [
            'NamaBarang.required' => 'Nama Barang Tidak Boleh Kosong',
            'JenisBarang.required' => 'Nama Barang Tidak Boleh Kosong',
            'Merk.required' => 'Merk Tidak Boleh Kosong',
            'Stok.required' => 'Stok Tidak Boleh Kosong',
            'Stok.integer' => 'Stok harus berupa angka',
            'Stok.min' => 'Stok Minimal 1',
            'Harga.required' => 'Harga Tidak Boleh Kosong',
            'Harga.integer' => 'Harga harus berupa angka',
            'Harga.min' => 'Harga minimal 1000',

        ]); 
        
        Tambah::create([
            'NamaBarang' => $request->NamaBarang,
            'JenisBarang' => $request->JenisBarang,
            'Merk' => $request->Merk,
            'Stok' => $request->Stok,
            'Harga' => $request->Harga,
        ]);
        
        return redirect()->route('Tambah')->with('success', 'Postingan berhasil ditambahkan.');
    }
}