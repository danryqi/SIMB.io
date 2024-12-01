<?php
// Koneksi ke database
include 'config.php';

// Query untuk mengambil semua data dari tabel laporan_orang_hilang
$query = "SELECT * FROM laporan_orang_hilang ORDER BY tanggal_laporan DESC"; 
$result = mysqli_query($conn, $query);

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="header mb-0">
        <div class="navbar-color text-light pb-1 pt-2">
            <div class="container">
                <div class="row justify-content-between nav-atas">
                    <div class="col-4">
                        <span class="text-white-50"><i class="bi bi-map-fill me-1" style="color: #f35525;"></i> Yogyakarta, Indonesia</span>
                    </div>
                    <div class="col-3" style="padding-left: 4%;">
                        <span id="time" class="text-white-50 fst-italic" style="margin-left: 20px;"></span>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-color">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <span class="fw-bold fs-3 text-color1">SI BENCANA</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mb-2 mb-lg-0 fs-6 fw-bolder ms-auto">
                        <li class="nav-item mx-3">
                            <a class="nav-link nav-aktif" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="dataupdate.html">Data Terbaru</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="statistik.html">Statistik</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="definisi.html">Definisi</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="laporan.php">Laporan</a>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kontak
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="kontakpenting.html">Kontak Penting</a></li>
                                <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
                            </ul>
                        </li>                        
                        <li class="nav-item mx-3" id="login">
                            <i class="bi bi-person-fill login-icon"></i>
                            <a class="nav-link text-color2 p-0" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
         
        <marquee>Selamat Datang di Website Sistem Informasi Bencana Gempa Bumi</marquee>
    </div>
    <div style="background-color: #f9f7e4;" class="content mt-0">
        <div class="container mt-5">
        <h3 class="text-center">Data Laporan Orang Hilang</h3>

<!-- Tabel Menampilkan Data -->
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Jenis Kelamin</th>
            <th>Deskripsi Fisik</th>
            <th>Lokasi Terakhir</th>
            <th>Tanggal Hilang</th>
            <th>Kontak Pelapor</th>
            <th>Tanggal Laporan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            // Menampilkan data jika ada
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['usia'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['deskripsi_fisik'] . "</td>";
                echo "<td>" . $row['lokasi_terakhir'] . "</td>";
                echo "<td>" . $row['tanggal_hilang'] . "</td>";
                echo "<td>" . $row['kontak_pelapor'] . "</td>";
                echo "<td>" . $row['tanggal_laporan'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9' class='text-center'>Data tidak ditemukan</td></tr>";
        }
        ?>
    </tbody>
</table>
        </div>
    </div>
    
    <div class="container-fluid bg-dark footer mt-5 wow fadeIn">
        <div class="container pt-2 pb-3 text-center">
            <span style="color: #f9f7e4;">&copy; Copyright 2024 - Website Sistem Informasi Manajemen Bencana Gempa Bumi</span>
        </div>
    </div>


        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    </body>
</html>