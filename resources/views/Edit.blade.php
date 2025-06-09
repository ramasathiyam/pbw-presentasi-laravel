<!DOCTYPE html>
<html>
<head>
    <title>Edit ATK</title>
    <script src="validasi.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0 text-center">Edit Data Barang ATK</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('Update', $data->id) }}" method="post" onsubmit="return validateForm()">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="NamaBarang" value="{{ $data->NamaBarang }}">
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="JenisBarang" value="{{ $data->JenisBarang }}">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="Merk" value="{{ $data->Merk }}">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="Stok" value="{{ $data->Stok }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="Harga" value="{{ $data->Harga }}">
                </div>
                <button type="submit" name="update" class="btn btn-primary" >Update</button>
                <a class="btn btn-secondary" href="{{ route('Admin') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>