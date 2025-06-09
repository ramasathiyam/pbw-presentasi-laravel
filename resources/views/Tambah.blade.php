<!DOCTYPE html>
<html>
<head>
    <title>Tambah ATK</title>
    <script src="validasi.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center">Tambah Barang ATK</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('Tambah') }}" method="post" onsubmit="return validateForm()">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="NamaBarang" placeholder="Masukkan nama barang">
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="JenisBarang" placeholder="Masukkan jenis barang">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="Merk" placeholder="Masukkan merk barang">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="Stok" placeholder="Masukkan jumlah stok">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="Harga" placeholder="Masukkan harga">
                    <div class="invalid-feedback"></div>
                </div>
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <a class="btn btn-secondary" href="{{ route('Admin') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>