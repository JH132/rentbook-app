<!DOCTYPE html>
<html>
  <head>
    <title>Create Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container"> 
      <h1>Create Buku</h1>
      <div class="text-right">
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
      </div>

      <br/>

      <form method="POST" action="{{ route('buku.store') }}">
        @csrf
        <div class="form-group">
          <label for="id_buku">ID Buku:</label>
          <input type="text" class="form-control" id="id_buku" name="id_buku" required>
        </div>
        <div class="form-group">
          <label for="judul">Judul:</label>
          <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
          <label for="pengarang">Pengarang:</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" required>
        </div>
        <div class="form-group">
          <label for="penerbit">Penerbit:</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit" required>
        </div>
        <div class="form-group">
          <label for="tahun_terbit">Tahun Terbit:</label>
          <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
        </div>
        <div class="form-group">
          <label for="kategori">Kategori:</label>
          <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi:</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <div class="form-group">
          <label for="jumlah_salinan">Jumlah Salinan:</label>
          <input type="text" class="form-control" id="jumlah_salinan" name="jumlah_salinan" required>
        </div>
        <div class="form-group">
          <label for="isbn">ISBN:</label>
          <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <button type="submit" class="btn btn-primary" formaction="{{ route('buku.index') }}">Simpan</button>
      </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
