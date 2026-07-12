<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

$data = mysqli_query($con,"SELECT * FROM booking ORDER BY id DESC");
if(!$data){
    die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../bootstrap-5.3.8-dist/css/bootstrap.min.css">

<style>
.navbar-nav .nav-link{
    color: white !important;
}

.navbar-brand{
    color: white !important;
}

.navbar-nav .nav-link:hover{
    color: #d1d1d1 !important;
    font-weight: 500;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background-color: rgb(10, 71, 44);">
    <div class="container-fluid">

<!-- Logo / Judul -->
    <a class="navbar-brand" href="dashboard.php">Lestari Jaya AC Mobil</a>

<!-- Tombol Mobile -->
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

<!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">

<!-- ms-auto = supaya ke kanan -->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>

    </div>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="mb-4">Dashboard Admin</h2>

    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>No Polisi</th>
            <th>Keluhan</th>
            <th>Tanggal Servis</th>
            <th>Jadwal Servis</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($data)){ ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td><?= $row['no_polisi']; ?></td>
            <td><?= $row['keluhan']; ?></td>
            <td><?= $row['tanggal_servis']; ?></td>
            <td><?= $row['jadwal_servis']; ?></td>
            <td><?= $row['status']; ?></td>
            
            <td>
                <a href="terima.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Terima</a>
                <a href="tolak.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Tolak</a>
    </td>
</tr>
        <?php } ?>
    </table>

</div>

</body>
</html>