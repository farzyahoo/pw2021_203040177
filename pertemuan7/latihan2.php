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
// Cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>">
        </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

<a href="latihan1.php">Kembali ke daftar mahasiswa</a>

</body>
</html>