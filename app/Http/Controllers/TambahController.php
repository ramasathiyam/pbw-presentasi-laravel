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
            'Stok' => 'required|string',
            'Harga' => 'required|string',
        ]); 
        
        Tambah::create([
            'NamaBarang' => $request->NamaBarang,
            'JenisBarang' => $request->JenisBarang,
            'Merk' => $request->Merk,
            'Stok' => $request->Stok,
            'Harga' => $request->Harga,
        ]);
        
        return redirect()->route('/')->with('success', 'Postingan berhasil ditambahkan.');
    }
}