<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Rumah Sakit</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="logo.jpg" alt="" width="45" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakkami.php">Kontak kami</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Spesialis
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mata</a></li>
            <li><a class="dropdown-item" href="#">THT</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari Pasien" aria-label="Search">
        <button class="btn btn-outline-success" name="tmb_cari" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid col-8 mt-5">
  <h1 class="display-3 text-center">DAFTAR PASIEN</h1>
  <table class="table table-dark table-hover">
    <tr>
      <th>no.</th>
      <th>nama pasien</th>
      <th>jenis kelamin</th>
      <th>alamat</th>
      <th>penyakit</th>
      <th>aksi</th>
    </tr>
    <?php
    $no = 1;
    $data = mysqli_query($koneksi,"SELECT * FROM pasien");
    while ($pasien = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $pasien['nama_pasien'];?></td>
        <td><?php echo $pasien['jenis_kelamin'];?></td>
        <td><?php echo $pasien['alamat'];?></td>
        <td><?php echo $pasien['penyakit'];?></td>
        <td>
            <a class="btn btn-warning" href="editpasien.php?id=<?php echo $pasien['id_pasien'];?>">edit</a>
            <a class="btn btn-danger" href="hapuspasien.php?id=<?php echo $pasien['id_pasien'];?>">hapus</a>
        </td>
      </tr>
      <?php } ?>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>