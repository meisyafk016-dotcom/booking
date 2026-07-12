<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lestari Jaya AC Mobil | Info Servis</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>

<body>
    <script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.js"></script>
</body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(10, 71, 44);">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Lestari Jaya AC Mobil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
        <li class="nav-item"><a class="nav-link active" href="info_servis.php">Info Servis</a></li>
        <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
        <li class="nav-item"><a class="nav-link" href="cek_status.php">Status</a></li>
        </ul>
    </div>
    </div>
</nav>

<!-- Content -->
<section class="py-3">
    <div class="container">

<!-- Title -->
<div class="text-center mb-5">
    <h2 class="section-title">Informasi Servis</h2>
    <p class="section-subtitle">Berikut adalah informasi terkait beberapa jenis layanan servis</p>
</div>

<!-- Cards -->
<div class="row g-4">
    <div class="col-md-6">
        <div class="service-card">
            <h3>Pasang Unit Baru</h3>
            <p>Lestari Jaya AC Mobil melayani pemasangan unit AC untuk mobil, bus, dan truk.</p>
        </div>
    </div>

<div class="col-md-6">
    <div class="service-card">
        <h3>Perawatan Sistem AC</h3>
            <p> Lestari Jaya AC Mobil menyediakan layanan servis AC
                mobil secara berkala meliputi isi freon,
                pembersihan kondensor, dan pengecekan sistem.</p>
    </div>
</div>

<div class="col-md-6">
    <div class="service-card">
        <h3>Perbaikan Sistem AC</h3>
            <p> Menangani berbagai kerusakan pada sistem AC mobil,
                mulai dari kompresor, evaporator,
                hingga kebocoran freon.</p>
    </div>
</div>

<div class="col-md-6">
    <div class="service-card">
        <h3>Penggantian Sparepart</h3>
            <p> Menyediakan penggantian sparepart AC mobil
                seperti kompresor, dryer, magnetic clutch,
                dan komponen lainnya.</p>
    </div>
</div>

</div>
</section>

</html>