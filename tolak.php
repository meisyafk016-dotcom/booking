<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE booking SET status='Ditolak' WHERE id='$id'");

if($query){
    echo "
    <script>
        alert('Booking berhasil ditolak!');
        window.location='dashboard.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Gagal menolak booking!');
        window.location='dashboard.php';
    </script>
    ";
}
?>