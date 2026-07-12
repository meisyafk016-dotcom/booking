<?php
include "koneksi.php";

if (!isset($_GET['id'])) {
    die("ID booking tidak ditemukan.");
}

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM booking WHERE id='$id'");

if (!$query) {
    die("Query Error : " . mysqli_error($con));
}

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data booking tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Output Booking</title>

<style>
body{
    margin:0;
    padding:40px;
    background:#f5f5f5;
    font-family:"Times New Roman", serif;
}

.container{
    width:500px;
    margin:20px auto;
}

.kotak{
    width: 400px;
    margin:50px auto;
    border:2px solid #000;
    background:#rgb(10, 71, 44);
    padding:25px;
}

.judul{
    text-align:center;
    font-size:20px;
    font-weight:bold;
    margin-bottom:5px;
}

.subjudul{
    text-align:center;
    font-size:20px;
    font-weight:bold;
    margin-bottom:30px;
}

.detail{
    width:100%;
    border-collapse:collapse;
    font-size:15px;
}

.detail td{
    padding:10px;
}

.label{
    width:100px;
}

.titik{
    width:10px;
    text-align:center;
}

.pesan{
    margin-top:50px;
    text-align:center;
    font-size:20px;
    font-weight:bold;
}
</style>

</head>
<body>
    <div class="container">
        <div class="kotak">
            
        <div class="judul">TERIMA KASIH</div>
        <div class="subjudul">BOOKING ANDA BERHASIL</div>
        
        <table class="detail">
            <tr>
                <td class="label">Nama</td>
                <td class="titik">:</td>
                <td><?= $data['nama']; ?></td>
            </tr>
            
            <tr>
                <td>No Polisi</td>
                <td>:</td>
                <td><?= $data['no_polisi']; ?></td>
            </tr>
            
            <tr>
                <td>Keluhan</td>
                <td>:</td>
                <td><?= $data['keluhan']; ?></td>
            </tr>
            
            <tr>
                <td>Tanggal Servis</td>
                <td>:</td>
                <td><?= date('d-m-Y',strtotime($data['tanggal_servis'])); ?></td>
            </tr>
            
            <tr>
                <td>Jadwal Servis</td>
                <td>:</td>
                <td><?= $data['jadwal_servis']; ?></td>
            </tr>
        </table>
        
        <div class="pesan">SILAHKAN DATANG KE BENGKEL TEPAT WAKTU DAN SESUAI JADWAL</div>
    </div>
</div>

</body>
</html>