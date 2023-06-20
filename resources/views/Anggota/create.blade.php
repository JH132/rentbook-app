<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Tambah Anggota</h1>
      <div class="text-right">
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
      </div>

      <br/>

      <form method="POST" action="{{ route('anggota.store') }}">
        @csrf
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="nomor_telepon">Nomor Telepon:</label>
          <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>
        <div class="form-group">
          <label for="tanggal_bergabung">Tanggal Bergabung:</label>
          <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" required>
        </div>
        <button type="submit" class="btn btn-primary" formaction="{{ route('anggota.index') }}">Simpan</button>
      </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
