<?php
session_start();
require('../database.php');

// Get all input values
$email = $_POST["email"];
$password = $_POST["password"];
$encrypedPassword = sha1($password);

// validate
if (empty($email) || empty($password)) {
    $msg = "Email dan kata sandi tidak boleh kosong";
    header("Location: ../login.php?msg=". $msg);
    return;
}

// Check email dan password
$sql = "SELECT email, password FROM user WHERE email = '$email' AND '$encrypedPassword'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // simpan sesi dia
    $_SESSION['email'] = $email;
    $msg = "Login Berhasil!";
    header("Location: ../feed.php");
} else {
    $msg = "Login gagal!, Pastikan Email dan Kata sandi anda benar!";
    header("Location: ../login.php?msg=". $msg);
}
