<?php

namespace App\Http\Controllers;
use App\Models\Tambah;

class AdminController extends Controller
{
    public function index(){
        $data = Tambah::all();
        return view('Admin', compact('data'));
    }

    public function delete($id){
        $data = Tambah::findOrFail($id);
        $data->delete();

        return redirect()->route('Admin')->with('success', 'Data berhasil dihapus.');
    }
}