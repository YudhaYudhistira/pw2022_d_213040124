<?php 
require 'functions.php';

// cek ketika tombol tambah sudah diklik
if(isset($_POST['tambah'])) {

    // tmabah data ke tabel mahasiswa
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambhakan!');
        document.location.href= 'index.php';
        </script>";
    }

}





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
    
    <div class="container">
      <h1>Daftar Mahasiswa</h1>

      <a href="index.php">Kembali ke Daftar Mahasiswa</a>
      <div class="row">
          <div class="col-8">
              <form action="" method="post" autocomplate="off">
                  <div class="mb-3">
                      <label for="nama" class="foem-label">Nama</label>
                      <input type="text" class="form-control"
                      id="nama" name="nama" require>
                  </div>
                  <div class="mb-3">
                      <label for="nama" class="foem-label">NPM</label>
                      <input type="number" class="form-control"
                      id="npm" maxlength="8" style="widht:130px" name="npm" require>
                  </div> 
                  <div class="mb-3">
                      <label for="nama" class="foem-label">Email</label>
                      <input type="text" class="form-control"
                      id="email" name="email">
                  </div>  
                  <div class="mb-3">
                      <label for="nama" class="foem-label">Jurusan</label>
                      <input type="text" class="form-control"
                      id="jurusan" name="jurusan">
                  </div> 
                  <div class="mb-3">
                      <label for="nama" class="foem-label">Gambar</label>
                      <input type="file" class="form-control"
                      id="gambar" name="gambar">
                  </div> 
                  <button type="submit" class="btn btn-primary" name="Tambah">Tambah Data</button>
             </form>
         </div>   
      </div>   
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