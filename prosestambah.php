<?php
include "koneksi.php";

$nama_pasien = $_POST['nama_pasien'];
$jk          = $_POST['jenis_kelamin'];
$alamat      = $_POST['alamat'];
$penyakit    = $_POST['penyakit'];

$query = "INSERT INTO pasien SET nama_pasien='$nama_pasien',jenis_kelamin='$jk',alamat='$alamat',penyakit='$penyakit'";
$insert = mysqli_query($koneksi,$query);

header("location:daftarpasien.php");
?>