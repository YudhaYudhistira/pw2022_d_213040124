<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Get</title>
</head>
<body>
 
<!-- megirim data menggunakan get -->
<a href="kuliah_latihan3.php?nama=Yudhistira">Kirim Data Nama</a>
<hr>
<!-- mengirimkan data menggukan post -->
<form action="kuluah_latihan3.php" method="post">
    <label for="username">username : </label>
    <input type="text" name="username" id="username">
    <br>
    <label for="passwor">Password :</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Kirim</button>
</form>

</body>
</html>