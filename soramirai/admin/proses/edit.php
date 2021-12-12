<?php
include '../../koneksi.php';

$id_daftar = isset($_POST['id_daftar']) ? $_POST['id_daftar'] : '';
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

if ($status=="Diterima"){
	If(isset($_POST['ubah'])){
	// echo $id_daftar;  untuk cek apakah id_daftar masuk atau tidak
		mysqli_query($db,
			"UPDATE tbdaftar SET nama='$nama', status='$status'
			WHERE id_daftar='$id_daftar'");
		header("location:../?hal=siswa-semua");
	}
}

if ($status=="Tidak Diterima"){
	If(isset($_POST['ubah'])){
	// echo $id_daftar;  untuk cek apakah id_daftar masuk atau tidak
		mysqli_query($db,
			"UPDATE tbdaftar SET nama='$nama', status='$status'
			WHERE id_daftar='$id_daftar'");
		header("location:../?hal=siswa-semua");
	}
}

if ($status=="Cadangan"){
	If(isset($_POST['ubah'])){
	// echo $id_daftar;  untuk cek apakah id_daftar masuk atau tidak
		mysqli_query($db,
			"UPDATE tbdaftar SET nama='$nama', status='$status'
			WHERE id_daftar='$id_daftar'");
		header("location:../?hal=siswa-semua");
	}
}

if ($status=="Sedang Proses"){
	If(isset($_POST['ubah'])){
	// echo $id_daftar;  untuk cek apakah id_daftar masuk atau tidak
		mysqli_query($db,
			"UPDATE tbdaftar SET nama='$nama', status='$status'
			WHERE id_daftar='$id_daftar'");
		header("location:../?hal=siswa-semua");
	}
}
?>