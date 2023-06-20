<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Tambahkan gaya untuk garis */
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
        /* Tambahkan gaya untuk garis pemisah antar kolom dan baris */
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabel Buku</h1>

        <br>

        <div class="row">
            <div class="col-md-6">
                <!-- Tambahkan search bar di sini -->
                <form action="{{ route('buku.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari buku..." name="search" value="{{ request()->input('search') }}">
                        <input type="hidden" name="filter" value="{{ request()->input('filter') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="text-right">
                    <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
                </div>
            </div>
        </div>

        <br>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Kategori</th>
                <th class="text-center">Jumlah Buku</th>
                <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bukus as $buku)
                    @if (strpos(strtolower($buku->id_buku), strtolower(request()->input('search'))) !== false
                        || strpos(strtolower($buku->judul), strtolower(request()->input('search'))) !== false
                        || strpos(strtolower($buku->kategori), strtolower(request()->input('search'))) !== false)
                        <tr>
                            <td class="text-center">{{ $buku->id_buku }}</td>
                            <td class="text-center">{{ $buku->judul }}</td>
                            <td class="text-center">{{ $buku->kategori }}</td>
                            <td class="text-center">{{ $buku->jumlah_salinan }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('buku.detail', ['id_buku' => $buku->id_buku]) }}" class="btn btn-info">Detail</a>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
