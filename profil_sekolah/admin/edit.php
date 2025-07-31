<?php
session_start();
if (!isset($_SESSION['login'])) { header("Location: login.php"); exit; }
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM berita WHERE id=$id"));

if ($_POST) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  mysqli_query($conn, "UPDATE berita SET judul='$judul', isi='$isi' WHERE id=$id");
  header("Location: dashboard.php");
}
?>
<h2>Edit Berita</h2>
<form method="post">
  <input type="text" name="judul" value="<?= $data['judul'] ?>"><br>
  <textarea name="isi"><?= $data['isi'] ?></textarea><br>
  <button type="submit">Update</button>
</form>