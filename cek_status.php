<?php
include "koneksi.php";

$data = false;
if(isset($_POST['no_hp'])){
$no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);

$data = mysqli_query($con,"SELECT *FROM booking WHERE no_hp='$no_hp' ORDER BY id DESC");
}
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
        <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
        <li class="nav-item"><a class="nav-link active" href="cek_status.php">Status</a></li>
        </ul>
    </div>
    </div>
</nav>
<div class="container mt-5">
    <h2 class="mb-4">Cek Status Booking</h2>

<!-- FORM CEK STATUS -->
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Masukkan Nomor HP</label>
        <input type="text" name="no_hp" class="form-control" placeholder="Contoh: 08123456789" required>
    </div>
    <button type="submit" class="btn btn-success">Cek Status</button>
</form>

<hr>
<?php
if($data){
    if(mysqli_num_rows($data) > 0){
        ?>
        
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tanggal Servis</th>
            <th>Jam</th>
            <th>Status</th>
        </tr>
    </thead>

<tbody>
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['tanggal_servis']; ?></td>
        <td><?= $row['jadwal_servis']; ?></td>
        <td>
            <?php
            if($row['status'] == 'Menunggu'){
                echo "<span class='badge bg-warning'>Menunggu</span>";
                }
                elseif($row['status'] == 'Diterima'){
                    echo "<span class='badge bg-success'>Diterima</span>";
                    }
                    elseif($row['status'] == 'Ditolak'){
                        echo "<span class='badge bg-danger'>Ditolak</span>";
                        }
            ?>
        </td>
    </tr>
    <?php } ?>
</tbody>
</table>

<?php
} else {
    echo "<div class='alert alert-danger'>Data booking tidak ditemukan.</div>";
        }
            }
?>

</div>

</body>
</html>