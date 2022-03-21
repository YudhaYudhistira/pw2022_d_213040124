<?php
// Representasi Data Mahasiswa

$mahasiswa = [
["Yudha Yudhistira", "213040124",
"yudhistirayudha09@gmail.com","Teknik Informatika"],
["Vina Nur Fauziah", "213040115", "vinaanurfauziah@gmail.com", 
"Teknik Informatika"],
["Muhammad Najrililah", "Najril@gmail.com","213040122", "Teknik Informatika"]
];

?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>NPM : <?php echo $mhs[1] ?></li>
        <li>Email : <?php echo $mhs[2] ?> </li>
        <li>Jurusan : <?php echo $mhs[3] ?></li>




    </ul>

<?php } ?>