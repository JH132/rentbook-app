<!DOCTYPE html>
<html>
  <head>
    <title>Create Peminjaman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Create Peminjaman</h1>
      <div class="text-right">
        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
      </div>

      <br/>

      <form method="POST" action="{{ route('peminjaman.store') }}">
        @csrf
        <div class="form-group">
          <label for="id_anggota">ID Anggota:</label>
          <select class="form-control select2" id="id_anggota" name="id_anggota" required>
            <option value="" selected disabled>Masukkan ID</option>
            @foreach($anggotas as $anggota)
              <option value="{{ $anggota->id_anggota }}">{{ $anggota->id_anggota }} - {{ $anggota->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="id_buku">ID Buku:</label>
          <select class="form-control select2" id="id_buku" name="id_buku" required>
            <option value="" selected disabled>Masukkan ID</option>
            @foreach($bukus as $buku)
              <option value="{{ $buku->id_buku }}">{{ $buku->id_buku }} - {{ $buku->judul }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
          <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" required>
        </div>
        <div class="form-group">
          <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
          <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <select class="form-control" id="status" name="status" required>
            <option value="Dipinjam">Dipinjam</option>
            <option value="Tepat Waktu">Tepat Waktu</option>
            <option value="Terlambat">Terlambat</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.select2').select2();
      });
    </script>
  </body>
</html>
