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

<!-- FORM EDIT -->

<div class="container">
      <div class="card mt-2">
        <h2 class="card-header ">EDIT FORM PASIEN </h2>
        <?php
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id'");
            while ($menu = mysqli_fetch_array($data)){
        ?>
                <form action="prosesedit.php" method="POST">
                        <div class="card-body">
                            <div class="form-floating mb-0">
                                <input name="id" type="hidden" value="<?php echo $menu ['id_pasien']; ?>">
                                <input name="nama_pasien" type="text" class="form-control" value="<?php echo $menu ['nama_pasien']; ?>">
                                <label for="floatingInput">Nama Pasien</label>
                            </div>
                            <div class="mb-2">
                                <label for="form-label">jenis kelamin</label>
                                <br>
                                <select class="form-select" name="jenis_kelamin" value="<?php echo $menu ['jenis_kelamin']; ?>">
                                    <option value="Laki-laki">laki-laki</option>
                                    <option value="Perempuan">perempuan</option>
                                </select>
                            </div>
                        <div class="mb-2">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $menu ['alamat']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">penyakit</label>
                            <input type="text" name="penyakit" class="form-control" id="exampleFormControlInput1" placeholder="" value="<?php echo $menu ['penyakit']; ?>">
                        </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">edit pasien</button>
                </div>
                </form>
        <?php } ?>
              </div>
              </div>
          </form>
        </div>
      </div>
  </body>