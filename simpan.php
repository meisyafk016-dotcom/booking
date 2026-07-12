<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$no_polisi = $_POST['no_polisi'];
$keluhan = $_POST['keluhan'];
$tanggal_servis = $_POST['tanggal_servis'];
$jadwal_servis = $_POST['jadwal_servis'];

$sql = "INSERT INTO booking (nama, alamat, no_hp, no_polisi, keluhan, tanggal_servis, jadwal_servis)
VALUES ('$nama', '$alamat', '$no_hp', '$no_polisi', '$keluhan', '$tanggal_servis', '$jadwal_servis')";

if (mysqli_query($conn, $sql)) {
    header("Location: sukses.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
