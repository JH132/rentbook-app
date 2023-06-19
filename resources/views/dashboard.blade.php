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
    
    .dashboard button {
      display: inline-block;
      margin: 10px;
      padding: 20px;
      font-size: 18px;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      background-image: linear-gradient(to right, #667eea, #764ba2); /* Warna button */
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out;
      width: 200px;
    }
    
    .dashboard button:hover {
      transform: scale(1.05);
    }
    
    /* Menerapkan kontras warna latar belakang dengan button */
    .dashboard.light-bg button {
      background-image: linear-gradient(to right, #764ba2, #667eea);
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <button class="btn btn-primary anggota" onclick="openAnggotaPage()">Anggota</button>
    <button class="btn btn-secondary buku" onclick="openBukuPage()">Buku</button>
    <button class="btn btn-success peminjaman" onclick="openPeminjamanPage()">Peminjaman</button>
  </div>
  
  <script>
    function openAnggotaPage() {
      alert("Halaman Anggota");
      // Tambahkan logika atau aksi yang ingin dilakukan saat button Anggota ditekan
    }
    
    function openBukuPage() {
      alert("Halaman Buku");
      // Tambahkan logika atau aksi yang ingin dilakukan saat button Buku ditekan
    }
    
    function openPeminjamanPage() {
      alert("Halaman Peminjaman");
      // Tambahkan logika atau aksi yang ingin dilakukan saat button Peminjaman ditekan
    }
  </script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
