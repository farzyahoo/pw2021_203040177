<?php
/*
Farriz Brilliant Wichaksana
203040177
https://github.com/farzyahoo/pw2021_203040177
Pertemuan 7 - 23 Februari 2021
Belajar mengenai GET & POST pada PHP
*/
?>
<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Farriz Brilliant Wichaksana", 
        "nrp" => "203040177",
        "email" => "203040177@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "g1.jpg"
    ],
    [
        "nama" => "Andi Rahman Hakim", 
        "nrp" => "203040122",
        "email" => "203040122",
        "jurusan" => "Teknik Informatika",
        "gambar" => "g2.jpg"
    ]
];


// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>