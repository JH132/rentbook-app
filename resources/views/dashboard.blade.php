<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f9fa; /* Warna latar belakang */
    }
    
    .dashboard {
      text-align: center;
    }
    
    .dashboard .button-wrapper {
      display: inline-block;
      text-align: center;
      margin: 10px;
      width: 200px;
    }
    
    .dashboard .button-wrapper img {
      margin-bottom: 8px;
    }
    
    .dashboard .button-wrapper button {
      display: block;
      margin: 0 auto;
      font-size: 18px;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      background-image: linear-gradient(to right, #667eea, #764ba2); /* Warna button */
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out;
      width: 100%;
      padding: 20px;
    }
    
    .dashboard .button-wrapper button:hover {
      transform: scale(1.05);
    }
    
    /* Menerapkan kontras warna latar belakang dengan button */
    .dashboard.light-bg .button-wrapper button {
      background-image: linear-gradient(to right, #764ba2, #667eea);
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <div class="button-wrapper">
    <img src="{{ asset('images/anggota.jpg') }}" alt="Anggota" width="80">
      <button class="btn btn-primary anggota" onclick="openAnggotaPage()">Anggota</button>
    </div>
    <div class="button-wrapper">
    <img src="{{ asset('images/buku.jpg') }}" alt="Buku" width="80">
      <button class="btn btn-secondary buku" onclick="openBukuPage()">Buku</button>
    </div>
    <div class="button-wrapper">
    <img src="{{ asset('images/peminjaman.jpg') }}" alt="Peminjaman" width="80">
      <button class="btn btn-success peminjaman" onclick="openPeminjamanPage()">Peminjaman</button>
    </div>
  </div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
