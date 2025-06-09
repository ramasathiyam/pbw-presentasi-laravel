<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambah extends Model
{
    use HasFactory;

    protected $table = 'barang'; // Nama tabel di database

    public $timestamps = true; // Jika kamu menggunakan created_at dan updated_at

    protected $fillable = [
        'NamaBarang',
        'JenisBarang',
        'Merk',
        'Stok',
        'Harga',
    ];
}
