<?php
    include "koneksi.php";

    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM pasien WHERE id_pasien='$id'");

    header("Location: daftarpasien.php");
?>