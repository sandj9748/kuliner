<!DOCTYPE html>
<html>
<head>
<title>Daftar Admin</title>
</head>
<body>

<h2>Daftar Admin ORMAWA</h2>

<form action="simpan_admin.php" method="POST">

<input type="text" name="username" placeholder="Username" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<select name="ormawa">
<option value="GEMATIKA">GEMATIKA</option>
<option value="BEM">BEM</option>
<option value="OLIMPIK">OLIMPIK</option>
</select>

<br><br>

<button type="submit">Daftar</button>

</form>

</body>
</html>