<?php
include '../../koneksi.php';

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

	$sql = "INSERT INTO tbdaftar
	VALUES ('', '$nama', '$ttl', '$jenis_kelamin', '$alamat', '$sekolah', '$hobi', '$belajar', '$email', '$status1')";
	$query = mysqli_query($db, $sql);

	header("location:../?hal=lihat-status");
}

If(isset($_POST['ubah'])){

	mysqli_query($db, "UPDATE tbdaftar SET nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat',
		sekolah='$sekolah', hobi='$hobi', belajar='', email='$email' WHERE email='$email'");
	header("location:../?hal=lihat-status");
}

?>