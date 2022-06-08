<?php
session_start();
require('../database.php');

// Step 1: Get all input value
$content = $_POST['content'];


// get user id
$email = $_SESSION['email'];
$sqlUser ="SELECT id FROM 'user' WHERE email = '$email'";
$resultUser = $conn->query($sqlUser);
$user_id = $resultUser->fetch_assoc()['id'];
var_dump("$user_id");
// pastikan input tidak null

if(empty($content)){
    $msg = "Status tidak boleh kosong";
    header("Location: ../feed.php?msg=" . $msg);
    return;
}

// Step 2: Save to database

$sql = "INSERT INTO status(user_id, content) VALUE ('$user_id', '$content')";

if ($conn->query($sql) === TRUE ){
    $msg = "Status berhasil di update!";
} else {
    $msg = "Status gagal di update!";
}

header("Location: ../feed.php?msg=" . $msg);