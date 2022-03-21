<?php
// Array Associative
// Array yang key nya ber asosiasi / berpapasan dengan string

$mahasiswa = 
[

[
    "nama" => "Yudha Yudhistira", 
    "npm" => "213040124",
    "email" => "yudhistirayudha09@gmail.com",
    "jurusan" => "Teknik Informatika"
],

[
    "nama" => "Vina Nur Fauziah",
    "npm" => "213040115",
    "email" => "vinaanurfauziah@gmail.com", 
    "jurusan" => "Teknik Informatika"
],

[
    "nama" => "Muhammad Najrililah", 
    "email" => "Najril@gmail.com",
    "npm" => "213040122",
    "jurusan" => "Teknik Informatika"
]

];

// var_dump($mahasiswa);

?>


<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NPM : <?php echo $mhs["npm"] ?></li>
        <li>Email : <?php echo $mhs["email"] ?> </li>
        <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
    </ul>

<?php } ?>