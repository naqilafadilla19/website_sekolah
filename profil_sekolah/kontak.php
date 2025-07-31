<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak Kami</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">Kontak Kami</h1>
    <form method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Anda" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email Anda" required>
      </div>
      <div class="mb-3">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea name="pesan" id="pesan" class="form-control" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
       <div class="text-end mt-4">
        <a href="index.php" class="btn btn-secondary"> ← Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
