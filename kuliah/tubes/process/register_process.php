<?php

require('../database.php');

// Step 1: Get all input value
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$password2 = $_POST["confirm_password"];
$encrypedPassword = sha1($password);

// Input tidak null

if(empty($email) || empty($username) || empty($password) || empty($password2)){
    $msg = "Semua input wajib diisi!!";
    header("Location: ../register.php?msg=" . $msg);
    return;
}

// cek password sama
if($password !== $password2){
   $msg = "Kata sandi tidak sama!";
   header("Location: ../register.php?msg=" . $msg);
   return; 
}


// Step 2: Save to database

$sql = "INSERT INTO user(email, username, password) VALUE ('$email','$username','$encrypedPassword')";

if ($conn->query($sql) === TRUE ){
    $msg = "Regiter Berhasil, Silhkan Login!";
} else {
    $msg = "Register Gagal!";
}

header("Location: ../login.php?msg=" . $msg);