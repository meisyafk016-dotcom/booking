<?php
include "koneksi.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$no_hp          = $_POST['no_hp'];
$no_polisi      = $_POST['no_polisi'];
$keluhan        = $_POST['keluhan'];
$tanggal_servis = $_POST['tanggal_servis'];
$jadwal_servis  = $_POST['jadwal_servis'];

if(empty($jadwal_servis)){
    echo "
    <script>
    alert('Silakan pilih jam servis!');
    window.location='booking.php';
    </script>";
    exit;
}

$cek = mysqli_query($con,"
SELECT *
FROM booking
WHERE tanggal_servis='$tanggal_servis'
AND jadwal_servis='$jadwal_servis'
");

if(mysqli_num_rows($cek) > 0){

    echo "
    <script>
    alert('Jam tersebut sudah dibooking!');
    window.location='booking.php';
    </script>";

    exit;
}

$sql = "INSERT INTO booking
(
    nama,
    alamat,
    no_hp,
    no_polisi,
    keluhan,
    tanggal_servis,
    jadwal_servis,
    status
)
VALUES
(
    '$nama',
    '$alamat',
    '$no_hp',
    '$no_polisi',
    '$keluhan',
    '$tanggal_servis',
    '$jadwal_servis',
    'Menunggu'
)";

$result = mysqli_query($con, $sql);

if($result){

    $id = mysqli_insert_id($con);

    header("Location: output_booking.php?id=".$id);
    exit();

}else{

    echo "Error : ".mysqli_error($con);

}

?>