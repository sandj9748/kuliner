<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>

<h2>Selamat Datang</h2>

<p>Username : <?php echo $_SESSION['username']; ?></p>

<p>Role : <?php echo $_SESSION['role']; ?></p>

<a href="logout.php">Logout</a>