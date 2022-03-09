function 
potongan program atau baris2 kode yang dibuat utk mempermudah kita pada saat program. dapat dipanggil berulang-ulang
- built in function (fungsi yg disediakan php)
http://php.net/manual/en/funcref.php
- user defined function (fungsi yang bikin sendiri) 

date/time
- time()
- date()
- mktime()
- strtotime()

date.php di p4


BUILT IN FUNCTION( fungsi dari PHP)

<?php
         // echo date ("l"); [Tuesday] 
         // ("l") hari = Tuesday
         // ("d") tanggal = 9
         // ("M") bulan = mar
         // ("m") bulan = 09
         // ("l, d-M-Y") = Tuesday,
            //  9-Mar-2022
         // function (" ") {cek butuh
            //  parameter atau engga}
         // Date
         // Untuk menampilkan tanggal
            //  dengan format tertentu

         // Time
         // UNIX Timestamp / EPOCH
        //  time
         // detik yang sudah berlaku 
            //  sejak 1 Januari 1970 ( waktu
            //  yang disepakati para ahli
            //  untuk komputer) 
         // echo time (); 
         // contoh mengetahui 100 hari 
            //  dari sekarang
         // 60detik*60menit*24 jam = 1 
            //  hari *2
         // echo date("l", time () 
            // +60*60*24*100); [Wednesday]
         // echo date("d M Y", time () 
            // +60*60*24*100); [ 10 Maret 
            // 2022]      {beda parameter}

         // contoh mengetahui 100 hari 
            //  kebelakang
         // echo date("l", time () 
            //  -60*60*24*100); [Saturday]

         // mktime
         // membuat sendiri detik
         // mktime (0,0,0,0,0,0)
         // jam, menit, detik, bulan, 
            //  tanggal, tahun
         // echo mktime 
            //  (0,0,0,8,25,1985); [detik 
            //  sudah diketahui] 
         // echo date ("l", mktime 
            //  (0,0,0,8,25,1985)); [Sunday]

         // strtotime
         // echo date ("l", strtotime("25 
            //  aug 1985"));

         // String
         // strlen() = menghitung 
            //  panjang sebuah string 
            // (length dari sebuah string) 
         // strcmp() = membandingkan 
            //  kedua buah string (string
            //  compare)
         // explode() = memecah 
            //  sebuah string menjadi array
         // htmlspecialchars() = 
            // menjaga kita dari org yg 
            // iseng mau masuk ke website       
            // kita (hacker) 

         // utility (fungsi bantuan)
         // var_dump() = mencetak isi 
            //  dari sebuah variabel, array,  
            //  objek,
         // isset() = cek variabel      
            //  apakah udah dibikin apa 
            //  blm, akan menghasilkan 
            //  nilai boolean, true or false, 
            //  klo blm berarti false
         // empty() = apakah variabel 
            //  yg ada kosong atau tidak, 
            //  ada isinya atau engga
         // die() = utk memberhentikan 
            //  program kita maka 
            //  program dibawahnya tdk 
            //  akan dieksekusi. 
         // sleep() =  memberhentikan 
            //  sementara, sleep 2 detik, 
            //  baru dijalanin
?>

USER DEFINED FUNCTION ( Fungsi Bikin Sendiri)

function.php
<?php

?>