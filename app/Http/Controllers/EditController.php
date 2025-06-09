<?php

namespace App\Http\Controllers;
use App\Models\Tambah;
use Illuminate\Http\Request;

class EditController extends Controller
{
    // public function index(){
    //     return view('Edit');
    // }
    public function edit($id) {
        $data = Tambah::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $barang = Tambah::findOrFail($id);
        $barang->update($request->all());
        return redirect()->route('Admin')->with('success', 'Data berhasil diperbarui.');
    }
}