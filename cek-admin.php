<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
	if( isset($_POST['submit']))
	{
			$user		= isset($_POST['username']) ? $_POST['username'] : "";
			$pass		= isset($_POST['password']) ? $_POST['password'] : "";
			$qry_admin	= mysqli_query($db,"SELECT * FROM tbadmin WHERE username = '$user' AND password = '$pass'");
			$sesi		= mysqli_num_rows($qry_admin);

			if ($sesi == 1)
			{
				$data_admin	= mysqli_fetch_array($qry_admin);
				$_SESSION['id_admin'] = $data_admin['id_admin'];
				$_SESSION['sesi'] = $data_admin['username'];
				$id_admin = $_SESSION['id_admin'];

				echo "<script>alert('Anda berhasil Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=admin?hal=home&admin=$id_admin'>";
			} 
			else {
				echo "<meta http-equiv='refresh' content='0; url=login-admin.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
	}
	else
	{
	  include "?hal=home";
	}
?>
