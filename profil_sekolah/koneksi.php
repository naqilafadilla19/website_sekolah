<?php
$conn = mysqli_connect("localhost", "root", "", "website_sekolah");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>