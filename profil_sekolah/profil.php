<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
      border-radius: 12px;
    }

    .card-body {
      animation: fadeInUp 0.5s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(8px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      font-weight: 700;
      color: #343a40;
    }

    h5 {
      color: #0d6efd;
      font-weight: 600;
    }

    ul li {
      margin-bottom: 5px;
    }

    .btn-secondary {
      border-radius: 30px;
      padding: 10px 25px;
      font-weight: 500;
    }

    .btn-secondary:hover {
      background-color: #6c757d;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <h1 class="text-center mb-4">Profil Sekolah</h1>

      <h5>Alamat:</h5>
      <p>Jl. Mpo Nori RT 09 RW 03, Kel. Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, DKI Jakarta</p>

      <h5>Email:</h5>
      <p>info@smkn64-jkt.sch.id</p>

      <h5>Visi:</h5>
      <p>Memiliki tamatan yang berbudi pekerti luhur, berkarakter, mandiri, berprestasi dan berjiwa wirausaha.</p>

      <h5>Misi:</h5>
      <ul>
        <li>Mengimplementasikan 5S (Senyum, Sapa, Salam, Sopan dan Santun).</li>
        <li>Membangun peserta didik menjadi seseorang yang memiliki sikap profesional.</li>
        <li>Mengarahkan peserta didik untuk meningkatkan potensi dan keahlian diri melalui pelatihan di dalam maupun di luar lingkungan sekolah.</li>
        <li>Menyiapkan tamatan agar mendapatkan prestasi juara di tingkat nasional dengan pelatihan di setiap kompetensi.</li>
        <li>Mengarahkan peserta didik mempunyai jiwa wirausaha melalui pelajaran kewirausahaan.</li>
      </ul>

      <h5>Tujuan:</h5>
      <ul>
        <li>Mengembangkan potensi siswa.</li>
        <li>Mengutamakan nilai kejujuran dan disiplin.</li>
      </ul>

      <div class="text-end mt-4">
        <a href="index.php" class="btn btn-secondary"> <- Kembali</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
