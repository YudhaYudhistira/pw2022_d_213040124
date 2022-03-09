<?php 
// Pertemuan 2, belajar mengenai sintaks PHP
// penulisan sintaks PHP
// echo untuk mencetak nilai ke layar 
echo (1 + 2) * 3 / 4;
echo "<hr>";

// OPERATOR
// Aritmatika
// +,-,*,/,%
echo 5 % 2; //sisa bagi
echo "<hr>";
echo 1 + 1;
echo "<hr>";
$x = 10;
$y = 20;
echo $x * $y;
echo "<hr>";

// Perbandiangan
// <, >, <=, >=, ==, !=
echo 10 != 20;
echo "<hr>";
var_dump(1 == 1);
echo "<hr>";
var_dump(1 === "1");
echo "<hr>";

// penggabung string / concatenation / concat
//  .
$nama_depan = "Yudha";
$nama_belakang = "Yudhistira";
echo $nama_depan . " " . $nama_belakang;
echo "<hr>";

// Variabel
// tidak boleh di awali angka, tapidi dalam nya boleh mengandung angka
$nama = "Yudhistira";
 echo "Halo nama saya $nama";
 echo "<hr>";

// Tempat menampung nilai
// tidak boleh menampung spasi 
// boleh mengandung angka, tidak boleh di awal
// Snake_case : $nama_depan_mahasiswa
// CamelCase : namaDepanMahasiswa
// kebab-case : nama-depan-mahasiswa
// Penugasan / Assignment
// =,+=, -=, *=, ?=, %=
$x = 1;
$x += 5;
echo $x;
echo "<hr>";

// Logika
// && / || / !

$x = 10; 
var_dump($x < 20 && $x % 2 == 0);
echo "<hr>"; 
$x = 30; 
var_dump($x < 20 && $x % 2 == 0);
echo "<hr>"; 

// Increment & Decrement
// ++, --
$b = 10;
echo ++$b;
echo "<br>";
echo $b--;
echo "<hr>";

// Identitas
// ===, !==
echo 10 === "10";
echo "<hr>";

// Komponen sintax PHP yang lain
echo "selesai mengerjakan tugas pertemuan 2";
?>
 <!-- 1. PHP di dalam html -->
<!-- 2. HTML 'di dalam PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Selamat Datang VINA <?php echo $nama; ?></h1>
    <p><?php echo "Ini adalah paragraf"; ?></p>
</body>
</html>
<!-- tanda baca -->
<!-- ` back tick
~ tilde
# pound
^ caret 
| pipe 
\ backslash 
/ slash  -->