<?php
include'../../koneksi.php';
$id_daftar = $_GET['id'];

//echo $id_daftar;  cek id_daftar

mysqli_query($db, "DELETE FROM tbdaftar WHERE id_daftar='$id_daftar'");

header("location:../index.php?hal=siswa-semua");

?>