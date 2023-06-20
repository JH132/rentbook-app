<!DOCTYPE html>
<html>
  <head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Edit Buku</h1>
      <div class="text-right">
        <a href="{{ route('buku.detail', ['id_buku' => $buku->id_buku]) }}" class="btn btn-secondary">Kembali</a>
    </div>

      <br/>

      <form method="POST" action="{{ route('buku.update', $buku->id_buku) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="judul">Judul:</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
        </div>
        <div class="form-group">
          <label for="pengarang">Pengarang:</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}" required>
        </div>
        <div class="form-group">
          <label for="penerbit">Penerbit:</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
        </div>
        <div class="form-group">
          <label for="tahun_terbit">Tahun Terbit:</label>
          <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
        </div>
        <div class="form-group">
          <label for="kategori">Kategori:</label>
          <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $buku->kategori }}" required>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi:</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $buku->deskripsi }}</textarea>
        </div>
        <div class="form-group">
          <label for="jumlah_salinan">Jumlah Salinan:</label>
          <input type="text" class="form-control" id="jumlah_salinan" name="jumlah_salinan" value="{{ $buku->jumlah_salinan }}" required>
        </div>
        <div class="form-group">
          <label for="isbn">ISBN:</label>
          <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $buku->isbn }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
