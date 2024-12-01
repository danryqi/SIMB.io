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
                            <a class="nav-link" href="#">Laporan</a>
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
        <div class="container">
        <div class="container mt-5">
    <div class="card shadow-lg p-4" style="border-radius: 15px;">
        <h3 class="text-center">Formulir Pendataan Orang Hilang</h3>
        <p class="text-center text-muted">Silakan isi formulir di bawah ini untuk melaporkan orang hilang</p>
        <form method="POST" action="clapor.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Orang Hilang</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan usia" required>
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin" name="jenisKelamin" required>
                    <option value="" selected>Pilih jenis kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsiFisik" class="form-label">Deskripsi Fisik</label>
                <textarea class="form-control" id="deskripsiFisik" name="deskripsiFisik" rows="3" placeholder="Misal: tinggi 170 cm, kulit sawo matang, memakai jaket hitam" required></textarea>
            </div>
            <div class="mb-3">
                <label for="lokasiTerakhir" class="form-label">Lokasi Terakhir Terlihat</label>
                <input type="text" class="form-control" id="lokasiTerakhir" name="lokasiTerakhir" placeholder="Masukkan lokasi terakhir terlihat" required>
            </div>
            <div class="mb-3">
                <label for="tanggalHilang" class="form-label">Tanggal Kehilangan</label>
                <input type="date" class="form-control" id="tanggalHilang" name="tanggalHilang" required>
            </div>
            <div class="mb-3">
                <label for="kontakPelapor" class="form-label">Kontak Pelapor</label>
                <input type="text" class="form-control" id="kontakPelapor" name="kontakPelapor" placeholder="Masukkan nomor telepon atau email" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="width: 300px;">Kirim Laporan</button>
            </div>
        </form>
    </div>
</div>

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