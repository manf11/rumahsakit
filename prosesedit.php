<?php
    include "koneksi.php";

    $id          = $_POST['id'];
    $nama_pasien = $_POST['nama_pasien'];
    $jk          = $_POST['jenis_kelamin'];
    $alamat      = $_POST['alamat'];
    $penyakit    = $_POST['penyakit'];

    $query = "UPDATE pasien SET nama_pasien='$nama_pasien',jenis_kelamin='$jk',alamat='$alamat',penyakit='$penyakit' WHERE id_pasien='$id'";

    $input = mysqli_query($koneksi, $query);
header("Location: daftarpasien.php")
?>