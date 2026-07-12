<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lestari Jaya AC Mobil | Kontak</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>

<body>
    <script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.js"></script>

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
        <li class="nav-item"><a class="nav-link" href="info_servis.php">Info Servis</a></li>
        <li class="nav-item"><a class="nav-link active" href="kontak.php">Kontak</a></li>
        <li class="nav-item"><a class="nav-link" href="cek_status.php">Status</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- JUDUL -->
<section class="py-3 text-center">
  <h2 class="text-3xl md:text-4xl font-bold mb-2">
    Kontak & Alamat Resmi
  </h2>
  <p class="text-gray-600">
    Hubungi kami hanya melalui kontak resmi berikut
  </p>
</section>

<!-- KONTEN -->
<section class="container mx-auto px-6 pb-16">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

<div class="container mt-5">
    <div class="row">

<!-- Kolom Kiri -->
  <div class="col-md-6">
    <div class="p-4 shadow-sm bg-white rounded">
      <h2>Kontak Resmi</h2>
      <p>
        <strong>📞 Telepon / WhatsApp:</strong><br>
        <a href="https://wa.me/6287746595260" target="_blank">0877-4659-5260</a></p>
      <p>
        <strong>📧 Email:</strong><br>
        <a href="mailto:benosetiawan63@gmail.com">benosetiawan63@gmail.com</a></p>
      <p>
        <strong>⏰ Jam Operasional:</strong><br>Senin – Sabtu (08.00 – 16.30)</p>
    </div>
  </div>

<!-- Kolom Kanan -->
  <div class="col-md-6">
    <div class="p-4 shadow-sm bg-white rounded">
      <h2>Alamat Bengkel</h2>
      <p>
        <strong>📍 Alamat Bengkel:</strong><br>
        <a href="https://maps.app.goo.gl/kE9p65v7BJnhs5kZ8" target="_blank">Babakan, Kec. Kalimanah, Purbalingga, Jawa Tengah</a>
</p>
    </div>
  </div>
  
</div>
</div>
</section>

</body>
</html>
