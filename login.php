<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,
    "SELECT * FROM admin
    WHERE username='$username'
    AND password='$password'
    AND status='aktif'");

    $data = mysqli_fetch_assoc($query);

    if($data){

        $_SESSION['login'] = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['id_ormawa'] = $data['id_ormawa'];

        header("Location: dashboard.php");
        exit;

    }else{
        echo "<script>alert('Username atau Password Salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
</head>
<body>

<h2>Login Admin ORMAWA</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<button type="submit" name="login">Login</button>

</form>

<p>Belum punya akun?</p>

<a href="register.php">Daftar Admin</a>

</body>
</html>