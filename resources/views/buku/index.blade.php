<!-- resources/views/buku/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Jumlah Salinan</th>
                <th>ISBN</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukus as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->kategori }}</td>
                <td>{{ $buku->jumlah_salinan }}</td>
                <td>{{ $buku->isbn }}</td>
                <td>
                    <a href="{{ route('buku.edit', $buku) }}">Edit</a>
                    <form action="{{ route('buku.destroy', $buku) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('buku.create') }}">Tambah Buku</a>
</body>
</html>
