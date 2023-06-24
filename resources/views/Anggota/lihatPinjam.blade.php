<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Peminjaman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
            margin: 20px
        }
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
        <a href="{{ route('dashboard') }}">Dashboard/</a>
        <a href="">Peminjaman</a>
        <h1>Tabel Peminjaman</h1>
        <br>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('peminjaman.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari peminjaman..." name="search" value="{{ request()->input('search') }}" id="searchInput">
                        <input type="hidden" name="filter" value="{{ request()->input('filter') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>                
            </div>
        </div>

        <br>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Judul Buku</th>
                    <th class="text-center">Nama Anggota</th>
                    <th class="text-center">Tanggal Peminjaman</th>
                    <th class="text-center">Tanggal Pengembalian</th>
                    <th class="text-center">Status</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($peminjamans as $peminjaman)
                    @if (strpos($peminjaman->id_peminjaman, $search) !== false || 
                        strpos($peminjaman->buku->judul, $search) !== false || 
                        strpos($peminjaman->anggota->nama, $search) !== false || 
                        strpos($peminjaman->tanggal_pengembalian, $search) !== false || 
                        strpos($peminjaman->status, $search) !== false)
                        <tr>
                            <td class="text-center">{{ $peminjaman->id_peminjaman }}</td>
                            <td class="text-center">{{ $peminjaman->buku->judul }}</td>
                            <td class="text-center">{{ $peminjaman->anggota->nama }}</td>
                            <td class="text-center">{{ $peminjaman->tanggal_peminjaman }}</td>
                            <td class="text-center">{{ $peminjaman->tanggal_pengembalian }}</td>
                            <td class="text-center">
                                <input type="text" class="form-control status-input" value="Diproses" disabled>
                            </td>
                            
                            </td>
                        </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var input, filter, table, tr, td, i, txtValue;
                input = $(this).val();
                filter = input.toLowerCase();
                table = $("table");
                tr = table.find('tbody tr'); // Ubah hanya mencari tr di dalam tbody
                tr.each(function() {
                    var match = false;
                    $(this)
                        .find('td')
                        .each(function() {
                            td = $(this);
                            if (td) {
                                txtValue = td
                                    .text()
                                    .toLowerCase();
                                if (txtValue.indexOf(filter) > -1) {
                                    match = true;
                                    return false; // Berhenti perulangan saat ada kecocokan
                                }
                            }
                        });
                    if (match) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
</body>
</html>
