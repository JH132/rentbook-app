<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Detail Buku</h1>
        <div class="text-right">
            <a href="#" class="btn btn-info">Edit</a>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    <br>  
        <table class="table">
            <tbody>
                <tr>
                    <th>ID Buku</th>
                    <td>{{ $buku->id_buku }}</td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>{{ $buku->judul }}</td>
                </tr>
                <tr>
                    <th>Pengarang</th>
                    <td>{{ $buku->pengarang }}</td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td>{{ $buku->penerbit }}</td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td>{{ $buku->tahun_terbit }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $buku->kategori }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $buku->deskripsi }}</td>
                </tr>
                <tr>
                    <th>Jumlah Salinan</th>
                    <td>{{ $buku->jumlah_salinan }}</td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td>{{ $buku->isbn }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-right">
            {{-- <form action="{{ route('buku.delete', $buku->id_buku) }}" method="GET"> --}}
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
