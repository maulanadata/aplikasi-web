<?php
include '../../koneksi.php';

$id_user		= isset($_POST['id_user']) ? $_POST['id_user'] : '';
$nama			= isset($_POST['nama']) ? $_POST['nama'] : '';
$ttl			= isset($_POST['ttl']) ? $_POST['ttl'] : '';
$jenis_kelamin	= isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$alamat			= isset($_POST['alamat']) ? $_POST['alamat'] : '';
$sekolah		= isset($_POST['sekolah']) ? $_POST['sekolah'] : '';
$hobi			= isset($_POST['hobi']) ? $_POST['hobi'] : '';
$belajar		= isset($_POST['belajar']) ? $_POST['belajar'] : '';
$email			= isset($_POST['email']) ? $_POST['email'] : '';
$username		= isset($_POST['username']) ? $_POST['username'] : '';
$status			= isset($_POST['status']) ? $_POST['status'] : '';
$status1		= "Sedang Proses";

if(isset($_POST['daftar'])){

	mysqli_query($db,
		"UPDATE tbuser SET nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat', sekolah='$sekolah',
		hobi='$hobi', belajar='$belajar', status='$status1' WHERE id_user='$id_user'");

	header("location:../?hal=lihat-status");
}

if(isset($_POST['ubah'])){

	mysqli_query($db,
		"UPDATE tbuser SET nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat', sekolah='$sekolah',
		hobi='$hobi', username='$username', email='$email' WHERE id_user='$id_user'");

	header("location:../?hal=lihat-status");
}

?>