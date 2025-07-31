<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-0">Dashboard Admin</h2>
      <div>
        <a href="tambah.php" class="btn btn-success btn-sm">+ Tambah Berita</a>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        <a href="../index.php" class="btn btn-secondary">Kembali</a>
         <div class="text-end mt-4">
      </div>
      </div>
    </div>

    <?php
    $data = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
    if (mysqli_num_rows($data) > 0) {
      while ($d = mysqli_fetch_assoc($data)) {
    ?>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($d['judul']) ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($d['tanggal']) ?></h6>
          <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus.php?id=<?= $d['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </div>
      </div>
    <?php
      }
    } else {
      echo "<p class='text-muted'>Belum ada berita yang ditambahkan.</p>";
    }
    ?>
  </div>
</body>
</html>
