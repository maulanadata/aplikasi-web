<?php
include'../koneksi.php';

$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];
$status1="Tidak Meminjam";
	
if(isset($_POST['simpaninput'])){
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $id_anggota.".".$tipe_file;

		// Tentukan folder untuk menyimpan file
		$folder = "../images/$file_foto";
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto="-";
	
	$sql = "INSERT INTO tbanggota VALUES('$id_anggota','$nama','$jenis_kelamin','$alamat','$status1')"; // '$file_foto'
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}

If(isset($_POST['simpanedit'])){
	
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		
		if(!empty($nama_file)){
		// Baca lokasi file sementara dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $id_anggota.".".$tipe_file;
		// Tentukan folder untuk menyimpan file
		$folder = "../images/$file_foto";
		@unlink ("$folder");
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto=$foto_awal;
	
	mysqli_query($db,
		"UPDATE tbanggota SET nama='$nama',jeniskelamin='$jenis_kelamin',alamat='$alamat', status='$status'
		WHERE idanggota='$id_anggota'"); // foto='$file_foto'
	header("location:../index.php?p=anggota");
}

?>