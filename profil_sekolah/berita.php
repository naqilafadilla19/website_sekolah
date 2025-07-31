<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h1 class="mb-4">Berita Sekolah</h1>

 <div class="text-end mt-4">
        <a href="index.php" class="btn btn-secondary"> ← Kembali</a>
      </div>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="mb-4">
            <h3><?= htmlspecialchars($row['judul']) ?></h3>
            <small class="text-muted"><?= htmlspecialchars($row['tanggal']) ?></small>
            <p><?= htmlspecialchars(substr($row['isi'], 0, 100)) ?>...</p>
            <hr>
        </div>
    <?php endwhile; ?>
</div>

<!-- Galeri Foto Sekolah -->
<div class="container mt-5">
    <h2 class="mb-4">Galeri Kegiatan Sekolah</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100">
                <img src="image/kegiatan1.webp" class="card-img-top" alt="Upacara Bendera">
                <div class="card-body">
                    <h5 class="card-title"> Wagub Rano Resmikan Revitalisasi SMKN 64 Jakarta</h5>
                    <p class="card-text">Wakil Gubernur (Wagub) DKI Jakarta, Rano Karno, meresmikan revitalisasi Sekolah Menengah Kejuruan Negeri (SMKN) 64 Jakarta di Kelurahan Bambu Apus, Kecamatan Cipayung, Jakarta Timur, pada Selasa (22/7). Dalam sambutannya, Wagub Rano menegaskan, revitalisasi ini merupakan wujud nyata komitmen Pemerintah Provinsi (Pemprov) DKI Jakarta dalam mendorong peningkatan kualitas sumber daya manusia (SDM), melalui penyediaan akses pendidikan yang berkualitas, inklusif, dan merata bagi seluruh warga.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="image/kegiatan2.jpg" class="card-img-top" alt="Lomba Pramuka">
                <div class="card-body">
                    <h5 class="card-title">Kompetisi Cerdas Cermat: Meningkatkan Semangat Literasi Para Siswa di SMKN 64 Jakarta  </h5>
                    <p class="card-text">2 Agustus 2024, SMKN 64 Jakarta menggelar sebuah kompetisi cerdas cermat pada acara Jumat Literasi. Kegiatan ini dilakukan secara serempak oleh seluruh siswa kelas XI RPL yang menjadi panitia penyelenggara pada hari itu.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="image/kegiatan3.jpg" class="card-img-top" alt="Pelatihan Wirausaha">
                <div class="card-body">
                    <h5 class="card-title">Pelantikan dan Sertijab di Sentul: SMK Negeri 64 Jakarta Bentuk Pemimpin Muda yang Tanggu</h5>
                    <p class="card-text">Jakarta, 28-29 September 2024 – SMK Negeri 64 Jakarta kembali menggelar acara pelantikan serta serah terima jabatan (Sertijab) yang diadakan selama dua hari di Sentul Selatan, Bogor. Acara ini tidak hanya dirancang untuk memperkuat kemampuan kepemimpinan dan kemandirian siswa, tetapi juga membangun kerjasama tim yang solid sebagai bekal penting untuk masa depan mereka.</p>
                </div>
            </div>
        </div>

        <!-- Tambahan 3 Foto Lagi -->

        <div class="col">
            <div class="card h-100">
                <img src="image/kegiatan4.jpeg" class="card-img-top" alt="Workshop Teknologi">
                <div class="card-body">
                    <h5 class="card-title">SMKN 64 Jakarta: Jumat Sehat, Utamakan Kesehatan Jadi Prioritas Terdepan</h5>
                    <p class="card-text">Jumat, 23 Agustus 2024 – SMKN 64 Jakarta kembali menggelar kegiatan "Jumat Sehat" yang rutin diadakan setiap minggunya. Kegiatan kali ini terasa istimewa karena kehadiran narasumber dari Puskesmas setempat serta mahasiswa dari Universitas Muhammadiyah Prof. Dr. HAMKA (UHAMKA). Dengan semangat yang tinggi, para siswa dan siswi SMKN 64 Jakarta mengikuti serangkaian kegiatan yang bertujuan untuk meningkatkan kesadaran akan pentingnya menjaga kesehatan, baik rohani maupun fisik.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="image/kegiatan5.jpg" class="card-img-top" alt="Pentas Seni">
                <div class="card-body">
                    <h5 class="card-title">Perayaan P5, Ajang Persiapan Siswa SMK Menuju Dunia Kerja</h5>
                    <p class="card-text">Perayaan P5 SMK Negeri 64 Jakarta kali ini bertemakan ” Wonderful Future Sixtyfour”. Kegiatan ini diselenggarakan pada Kamis, 20 Juni 2024 di lapangan SMK Negeri 64 Jakarta. Tema kali ini berkaitan dengan kebekerjaan yang bertujuan untuk membantu siswa/siswi SMK Negeri 64 Jakarta dalam mempersiapkan diri menuju dunia kerja.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="image/kegiatan6.jpeg" class="card-img-top" alt="Kegiatan Olahraga">
                <div class="card-body">
                    <h5 class="card-title">Peringatan Kelahiran Pancasila di SMK Negeri 64 Jakarta</h5>
                    <p class="card-text">Pada 1 Juni 2024, SMK Negeri 64 Jakarta melaksanakan upacara untuk memperingati Hari Kelahiran Pancasila. Upacara ini dilaksanakan pada Sabtu pagi dipimpin oleh ibu Dewi Puspitasari S.ST.Par, M.Par., selaku Kepala SMKN 64 Jakarta. </p>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
