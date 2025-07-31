<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #97bde4, #9abee2);
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }

    .hero-section {
      position: relative;
      padding: 100px 20px;
      background: url('image/64.jpg') no-repeat center center;
      background-size: cover;
      color: white;
      border-radius: 15px;
      overflow: hidden;
    }

    .hero-section::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero-section .lead {
      font-size: 1.25rem;
      font-weight: 400;
    }

    .btn-custom {
      background-color: #ffffff;
      color: #1d3557;
      border-radius: 30px;
      font-weight: 600;
      padding: 12px 30px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .btn-custom:hover {
      background-color: #e0e0e0;
      color: #000;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="hero-section text-center">
      <div class="hero-content">
        <h1 class="display-4 fw-bold">Selamat Datang di Website Profil Sekolah</h1>
        <p class="lead mt-3">Temukan informasi seputar visi, misi, berita terkini, dan kontak sekolah kami.</p>
        <a href="profil.php" class="btn btn-custom mt-4">Lihat Profil Sekolah</a>
      </div>
    </div>
  </div>
</body>
</html>
