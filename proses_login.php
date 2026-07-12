<?php
session_start();
include '../koneksi.php';

$username = $_POST['admin'];
$password_input = $_POST['admin12345'];

$password = password_hash($password_input, PASSWORD_DEFAULT);

$query = mysqli_query($koneksi,
"SELECT *FROM admin WHERE username='$username' AND password='$password'");

$data =mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['admin'] = $data['username '];
    header("Location: dashboard.php");
} else {
    echo "Login gagal";
}
?>