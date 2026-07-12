<?php
session_start();
require "../koneksi.php";

if(isset($_POST['loginbtn'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

// Username & password admin
if($username == "admin" && $password == "admin12345"){
    $_SESSION['admin'] = $username; header("Location: dashboard.php");
    exit();
    
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../bootstrap-5.3.8-dist/css/bootstrap.min.css">
    
<style>
.main{
    height: 100vh;
}

.login-box{
    width: 500px;
    border: solid 1px #ccc;
    border-radius: 10px;
}
</style>
</head>

<body>
<div class="main d-flex justify-content-center align-items-center">
    <div class="card login-box shadow p-4 bg-light">
        <div class="col-md-12">
            <h2 class="fw-bold mb-4 text-center">
                <span class="text-success">Selamat Datang di Lestari Jaya AC Mobil</span>
            </h2>
        
        <?php if(isset($error)){ ?>
        <div class="alert alert-danger"><?= $error; ?></div>

        <?php } ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text"class="form-control"name="username"required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"class="form-control"name="password"required>
            </div>

            <button type="submit"class="btn btn-success form-control"name="loginbtn">Login</button>
        </form>
    </div>
</div>

</body>
</html>