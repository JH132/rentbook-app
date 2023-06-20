<!DOCTYPE html>
<html>
  <head>
    <title>Edit Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Edit Anggota</h1>
      <div class="text-right">
        <a href="{{ route('anggota.detail', ['id_anggota' => $anggota->id_anggota]) }}" class="btn btn-secondary">Kembali</a>
      </div>

      <br/>

      <form method="POST" action="{{ route('anggota.update', $anggota->id_anggota) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $anggota->alamat }}" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $anggota->email }}" required>
        </div>
        <div class="form-group">
          <label for="nomor_telepon">Nomor Telepon:</label>
          <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ $anggota->nomor_telepon }}" required>
        </div>
        <div class="form-group">
          <label for="tanggal_bergabung">Tanggal Bergabung:</label>
          <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" value="{{ $anggota->tanggal_bergabung }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
