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
        <li class="nav-item">
          <a class="nav-link" href="daftarpasien.php">daftar pasien</a>
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
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
      <div class="card mt-2">
        <h2 class="card-header ">FORM PENDAFTARAN </h2>
          <div class="card-body">
          <form class="row g-3" method="POST" action="prosestambah.php">
          <div class="form-floating mb-0">
  <input name="nama_pasien" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Nama Pasien</label>
</div>
          <div class="mb-2">
              <label for="form-label">jenis kelamin</label>
              <br>
              <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option selected aria-placeholder="jenis-kelamin"></option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
          </select>
        <div class="mb-2">
          <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
          <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">penyakit</label>
            <input type="text" name="penyakit" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
  <div class="col-12 mt-2">
    <button type="submit" class="btn btn-primary">Daftar</button>
  </div>
</form>
              </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container-fluid col-6 mt-5">
  <h1 class="display-3 text-center">DAFTAR PASIEN</h1>
  <table class="table table-dark table-hover">
    <tr>
      <th>no.</th>
      <th>nama pasien</th>
      <th>jenis kelamin</th>
      <th>alamat</th>
      <th>penyakit</th>
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
      </tr>
      <?php } ?>
  </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>