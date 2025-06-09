<!DOCTYPE html>
<html>
<head>
    <title>Data ATK</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <h2 class=" m-3 text-center fw-bold">Data Alat Tulis Kantor</h2>
    <div class="d-flex justify-content-end mb-3 me-5">
        {{-- <a href="tambah.php" class="btn btn-primary">Tambah Barang</a> --}}
        <a class="btn btn-primary" href="{{ route('Tambah') }}">Tambah Barang</a>
    </div>
    <table class="table table-bordered text-center align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>  
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($data as $post)
                <tr>
                    <td>{{ $no++ }}</td>
                    {{-- <td><img src="{{ asset('storage/' . $post->Poster) }}" width="60" /></td> --}}
                    <td>{{ $post->NamaBarang }}</td>
                    <td>{{ $post->JenisBarang }}</td>
                    <td>{{ $post->Merk }}</td>
                    <td>{{ $post->Stok }}</td>
                    <td>{{ $post->Harga }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('Edit', $post->id) }}">Edit</a>
                        {{-- <a class="btn btn-danger" href="{{ route('Tambah') }}">Hapus</a> --}}
                        <form action="{{ route('Hapus', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

