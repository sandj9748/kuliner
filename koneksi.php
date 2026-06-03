<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "ormawa"
);

if(!$koneksi){
    die("Koneksi gagal");
}
?>