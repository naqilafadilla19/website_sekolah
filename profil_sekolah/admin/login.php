<?php
session_start();
include '../koneksi.php';

if ($_POST) {
  $u = $_POST['username'];
  $p = $_POST['password'];
  $q = mysqli_query($conn, "SELECT * FROM admin WHERE username='$u' AND password='$p'");
  if (mysqli_num_rows($q) > 0) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Login gagal! Username atau password salah.";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card p-4 shadow">
          <h4 class="text-center mb-4">Login Admin</h4>

          <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?= $error ?></div>
          <?php } ?>

          <form method="post">
            <div class="mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
