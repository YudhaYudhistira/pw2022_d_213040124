<?php
$mahasiswa = 
[

[
    "nama" => "Yudha Yudhistira", 
    "npm" => "213040124",
    "email" => "yudhistirayudha09@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "download.jpg"
],

[
    "nama" => "Vina Nur Fauziah",
    "npm" => "213040115",
    "email" => "vinaanurfauziah@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "tes-psikologi.jpeg"
],

[
    "nama" => "Muhammad Najrililah", 
    "email" => "Najril@gmail.com",
    "npm" => "213040122",
    "jurusan" => "Teknik Informatika",
    "gambar" => "kartun2.jpg"
]

];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahawsiwa</title>
  </head>
  <body>
    
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>


    </tr>
  </thead>
  <tbody>
      <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row" class="align-middle"><?= $i++; ?></th>
    <td class="aligh-middle">
        <img src="img/<?php echo $mhs ["gambar"]; ?>" height="50"
        class="rounded-circle">
    </td>
      <td class="align-middle"><?= $mhs ["nama"]; ?></td>
      <td class="align-middle"><?= $mhs ["npm"];?></td>
      <td class="align-middle"><?= $mhs ["email"];?></td>
      <td class="align-middle"><?= $mhs ["jurusan"];?></td>
      <td class="align-middle"> <button type="button" class="btn btn-warning">Edit</button></td>
      <td class="align-middle"> <button type="button" class="btn btn-danger">Delete</button></td>
 
    </tr>
    <?php endforeach; ?>
    <td> 
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>