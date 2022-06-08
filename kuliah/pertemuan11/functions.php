<?php

function koneksi(){
    $conn = mysqli_connect('localhost','root','','pw2022_d_213040124') or die('Koneksi ke DB GAGAL!');

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }

    return $rows;
}


function tambah($data) {
    $conn = koneksi();
 
    $nama = htmlspesialchars($data["nama"]);
    $npm = htmlspesialchars($data["npm"]);
    $email = htmlspesialchars($data["email"]);
    $jurusan = htmlspesialchars($data["jurusan"]);
    $gambar = htmlspesialchars($data["gambar"]);
   
    $query = "INSERT INTO mahasiswa VALUES(null, '$nama','$npm','$email','$juruan','$gambar')"; 

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
