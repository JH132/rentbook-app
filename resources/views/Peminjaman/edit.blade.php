<!DOCTYPE html>
<html>
  <head>
    <title>Edit Peminjaman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Edit Peminjaman</h1>
      <div class="text-right">
        <a href="{{ route('peminjaman.detail', ['id_peminjaman' => $peminjaman->id_peminjaman]) }}" class="btn btn-secondary">Kembali</a>
      </div>

      <br/>

      <form method="POST" action="{{ route('peminjaman.update', $peminjaman->id_peminjaman) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="id_anggota">ID Anggota:</label>
          <select class="form-control select2" id="id_anggota" name="id_anggota" required>
            @foreach($anggotas as $anggota)
              <option value="{{ $anggota->id_anggota }}" @if($anggota->id_anggota == $peminjaman->id_anggota) selected @endif>{{ $anggota->id_anggota }} - {{ $anggota->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="id_buku">ID Buku:</label>
          <select class="form-control select2" id="id_buku" name="id_buku" required>
            @foreach($bukus as $buku)
              <option value="{{ $buku->id_buku }}" @if($buku->id_buku == $peminjaman->id_buku) selected @endif>{{ $buku->id_buku }} - {{ $buku->judul }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
          <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" value="{{ $peminjaman->tanggal_peminjaman }}" required>
        </div>
        <div class="form-group">
          <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
          <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="{{ $peminjaman->tanggal_pengembalian }}" required>
        </div>
        <div class="form-group">
          <label for="status">Status:</label>
          <select class="form-control" id="status" name="status" required>
            <option value="Dipinjam" @if($peminjaman->status == 'Dipinjam') selected @endif>Dipinjam</option>
            <option value="Tepat Waktu" @if($peminjaman->status == 'Tepat Waktu') selected @endif>Tepat Waktu</option>
            <option value="Terlambat" @if($peminjaman->status == 'Terlambat') selected @endif>Terlambat</option>
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
