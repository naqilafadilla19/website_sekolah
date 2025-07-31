<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
include '../koneksi.php';

$pesan = ""; // ← deklarasi agar tidak undefined

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];

  if ($judul && $isi) {
    $judul_sanitized = mysqli_real_escape_string($conn, $judul);
    $isi_sanitized = mysqli_real_escape_string($conn, $isi);

    $query = "INSERT INTO berita (judul, isi, tanggal) VALUES ('$judul_sanitized', '$isi_sanitized', CURDATE())";
    mysqli_query($conn, $query);

    header("Location: dashboard.php");
    exit;
  } else {
    $pesan = "❌ Semua field wajib diisi!";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Tambah Berita</h4>
      </div>
      <div class="card-body">
        <?php if (!empty($pesan)): ?>
          <div class="alert alert-danger"><?= $pesan; ?></div>
        <?php endif; ?>
        <form method="post">
          <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea name="isi" id="isi" rows="6" class="form-control" required></textarea>
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="dashboard.php" class="btn btn-secondary"> ← Kembali</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
