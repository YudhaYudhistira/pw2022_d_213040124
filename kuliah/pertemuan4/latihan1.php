<?php
// function

// potongan program atau baris2 kode yang dibuat utk mempermudah kita pada saat program. dapat dipanggil berulang-ulang 
// -built in function (fungsi yg disediakan php) http://php.net/manual/en/funcref.php
// -user defined function (fungsi yang bikin sendiri) 

// date/time 
// -time()
// -date()
// -mktime()
// -strtotime()

// BUILT IN FUNCTION( fungsi dari PHP)

// Hari Sekarang
echo date ("l");
echo "<hr>";

// ("l") hari = Tuesday 
// ("d") tanggal = 9
// ("M") bulan = mar 
// ("m") bulan = 09
// ("l, d-M-Y") = Tuesday, 9-Mar-2022 
// function (" ") (cek butuh parameter atau engga) 
// Date
// Untuk menampilkan tanggal dengan format tertentu

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlaku sejak 1 Januari 1970 (waktu yang disepakati para ahli untuk komputer)

// UNIX Timestamp
echo time (); 
echo "<hr>";

// contoh mengetahui 100 hari dari sekarang
// 60detik*60menit 24 jam = 1 hari *2 = hari yg dicari

// 100 hari dari sekarang pake parameter length (hari)
echo date("l", time () +60*60*24*100);
echo "<hr>";

// 100 hari sekarang dari sekarang pake parameter d M Y
echo date("d M Y", time() +60*60*24*100);
echo "<hr>"; 

// contoh mengetahui 100 hari kebelakang
echo date("l", time ()-60*60*24*100);
echo "<hr>"; 

// mktime
// membuat sendiri detik 
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 

echo mktime(0,0,0,6,9,2003);
echo "<hr>"; 

echo date ("l", mktime (0,0,0,6,9,2003));
echo "<hr>"; 

// strtotime
// sama kaya mktime tapi pake string
echo date ("l", strtotime("9 jun 2003"));
echo "<hr>"; 

// String 
// strlen() = menghitung panjang sebuah string (length dari sebuah string)
// strcmp() = membandingkan kedua buah string (string compare)
// explode() = memecah sebuah string menjadi array 
// htmispecialchars() = menjaga kita dari org yg iseng mau masuk ke website kita (hacker) 

// utility (fungsi bantuan)
// var_dump() = mencetak isi dari sebuah variabel, array, objek,
// isset() = cek variabel apakah udah dibikin apa blm, akan menghasilkan nilai boolean, true or false, klo blm berarti false
// empty() = apakah variabel ada kosong atau yg ada kosong atau tidak, ada isinya atau ang ada isinya atau engga
// die() = utk memberhentikan program kita maka program dibawahnya tdk akan dieksekusi. 
// sleep() = memberhentikan sementara, sleep 2 detik, baru dijalanin
?>