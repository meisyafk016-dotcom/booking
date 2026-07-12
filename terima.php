<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($con, "UPDATE booking SET status='Diterima' WHERE id='$id'");

if($query){
    echo "
    <script>
        alert('Booking berhasil diterima!');
        window.location='dashboard.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Gagal menerima booking!');
        window.location='dashboard.php';
    </script>
    ";
}
?>