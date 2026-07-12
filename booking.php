<?php
include "koneksi.php";

$query = mysqli_query($con,"
SELECT tanggal_servis,jadwal_servis
FROM booking
");

$data_booking = [];

while($row = mysqli_fetch_assoc($query)){
    $data_booking[] = $row;
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

<style>

body{
    background:#f3f4f6;
    font-family:Arial, sans-serif;
}

.form-wrapper{
    width:400px;
    margin:30px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,.1);
}

.form-group{
    margin-bottom:15px;
}

.form-group label{
    display:block;
    margin-bottom:5px;
    font-weight:bold;
}

.form-group input,
.form-group textarea{
    width:100%;
    padding:8px;
    border:1px solid #ddd;
    border-radius:6px;
}

.jadwal-item{
    border:1px solid #ddd;
    padding:12px;
    text-align:center;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
    background:#fff;
    transition:.2s;
    margin:3px;
}

.jadwal-item:hover{
    border-color:#0f5b3f;
}

.jadwal-item.active{
    background:#0f5b3f;
    color:white;
    border-color:#0f5b3f;
}

.jadwal-item.disabled{
    background:#ccc;
    color:#666;
    cursor:not-allowed;
    border-color:#ccc;
}

.btn-submit{
    width:100%;
    background:#0f5b3f;
    color:white;
    padding:10px;
    border:none;
    border-radius:8px;
    margin-top:15px;
}

</style>

<body>

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
        <li class="nav-item"><a class="nav-link active" href="booking.php">Booking</a></li>
        <li class="nav-item"><a class="nav-link" href="info_servis.php">Info Servis</a></li>
        <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
        <li class="nav-item"><a class="nav-link" href="cek_status.php">Status</a></li>
        </ul>
    </div>
    </div>
</nav>

<!-- JUDUL -->
<section class="py-3">
    <div class="text-center">
        <h2>Form Pemesanan</h2>
        <p>Silahkan isi dengan benar</p>
    </div>
</section>

<!-- FORM -->
<div class="form-wrapper">

<form method="POST" action="proses_booking.php">

    <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama" required></div>
    <div class="form-group"><label>Alamat</label><textarea name="alamat" required></textarea></div>
    <div class="form-group"><label>No HP</label><input type="text" name="no_hp" required></div>
    <div class="form-group"><label>Nomor Polisi</label><input type="text" name="no_polisi" required></div>
    <div class="form-group"><label>Keluhan</label><textarea name="keluhan" required></textarea></div>
    <div class="form-group"><label>Tanggal Servis</label><input type="date" name="tanggal_servis" id="tanggal_servis" class="form-control" required></div>
    <div class="form-group"><label>Pilih Jam</label>
    <br>

    <button type="button" class="jadwal-item" data-jadwal="08:00-09:00">08:00-09:00</button>
    <button type="button" class="jadwal-item" data-jadwal="09:00-10:00">09:00-10:00</button>
    <button type="button" class="jadwal-item" data-jadwal="10:00-11:00">10:00-11:00</button>
    <button type="button" class="jadwal-item" data-jadwal="11:00-12:00">11:00-12:00</button>
    <button type="button" class="jadwal-item" data-jadwal="13:00-14:00">13:00-14:00</button>
    <button type="button" class="jadwal-item" data-jadwal="14:00-15:00">14:00-15:00</button>
    <button type="button" class="jadwal-item" data-jadwal="15:00-16:00">15:00-16:00</button>
    <input type="hidden" name="jadwal_servis" id="jadwal-input">
</div>

    <button type="submit" class="btn-submit">Selesai</button>

</form>
</div>

<script>

const bookingData = <?= json_encode($data_booking); ?>;

const tanggalInput = document.getElementById('tanggal_servis');
const jadwalInput  = document.getElementById('jadwal-input');

tanggalInput.addEventListener('change', function(){

    const tanggalDipilih = this.value;

    document.querySelectorAll('.jadwal-item').forEach(btn => {

        const jam = btn.dataset.jadwal;

        const sudahTerbooking = bookingData.some(item =>
            item.tanggal_servis === tanggalDipilih &&
            item.jadwal_servis === jam
        );

        if(sudahTerbooking){

            btn.disabled = true;
            btn.classList.add('disabled');
            btn.classList.remove('active');

            btn.textContent = jam + '';

        }else{

            btn.disabled = false;
            btn.classList.remove('disabled');

            btn.textContent = jam;
        }

    });

});

document.querySelectorAll('.jadwal-item').forEach(btn => {

    btn.addEventListener('click', function(){

        if(this.disabled) return;

        document.querySelectorAll('.jadwal-item').forEach(item => {
            item.classList.remove('active');
        });

        this.classList.add('active');

        jadwalInput.value =
            this.getAttribute('data-jadwal');

    });

});

</script>

<script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.js"></script>
</body>
</html>