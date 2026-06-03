<!DOCTYPE html>
<html>
<head>
<title>Daftar ORMAWA</title>

<style>

body{
    background:url('image.jpg');
    background-size:cover;
    font-family:Arial;
}

.judul{
    color:white;
    font-size:50px;
    margin:40px;
    text-shadow:2px 2px 5px black;
}

.container{
    display:flex;
    justify-content:center;
    gap:40px;
}

.card{
    width:200px;
    background:#FFFFFF;
    border-radius:25px;
    text-align:center;
    padding:30px;
    color:#555;
}

.card img{
    width:200px;
    height:200px;
    object-fit:contain;
}

.card h3{
    margin-top:20px;
}

.login{
    float:right;
    margin:30px;
}

.login a{
    text-decoration:none;
    background:white;
    color:black;
    padding:15px 40px;
    border-radius:30px;
}

</style>
</head>

<body>

<div class="login">
<a href="login.php">Login untuk menambahkan</a>
</div>

<h1 class="judul">
PILIH ORMAWA YANG INGIN<br>
ANDA KUNJUNGI
</h1>

<div class="container">

<div class="card">
    <a href="gematika.php">
        <img src="gematikol.jpg">
        <h3>GEMATIKA</h3>
    </a>
</div>


<div class="card">
<img src="BEM.jpg">
<h3>BEM</h3>
</div>

<div class="card">
<img src="OLIMPIK.jpg">
<h3>OLIMPIK</h3>
</div>

</div>

</body>
</html>

