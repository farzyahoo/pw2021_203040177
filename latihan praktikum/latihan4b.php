
<?php
/*
    Farriz Brilliant Wichaksana
    2030401177
    Senin,13.25
*/
?>

<?php 
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM data");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4b</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
</head>
<body>
  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <h1 class="display-4">NOVEL</h1>
        <table id="table" class="table table-bordered table-striped table-hover text-center">
          <thead>
            <tr>
              <th>NO</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Pengarang</th>
              <th>Terbit</th>
              <th>Dimensi</th>
              <th>ISBN</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1 ?>
          <?php foreach( $books as $row ) : ?>
          <tr>
            <th scope="row"><?= $i ?></th>
            <td><img src="assets/gambar/<?= $row["gambar"]; ?>"></td>
            <td><?= $row["Judul"] ?></td>
            <td><?= $row["Pengarang"] ?></td>
            <td><?= $row["Terbit"] ?></td>
            <td><?= $row["Dimensi"] ?></td>
            <td><?= $row["ISBN"] ?></td>
          </tr>
          <?php $i++ ?>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Datatables -->
    <script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!-- jquery -->
    <script src="assets/js/script.js"></script>
</body>
</html>