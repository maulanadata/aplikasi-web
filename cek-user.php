<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
	if( isset($_POST['submit']))
	{
			$user		= isset($_POST['username']) ? $_POST['username'] : "";
			$pass		= isset($_POST['password']) ? $_POST['password'] : "";
			$qry_user	= mysqli_query($db,"SELECT * FROM tbuser WHERE username = '$user' AND password = '$pass'");
			$sesi		= mysqli_num_rows($qry_user);

			if ($sesi == true)
			{
				$data_user	= mysqli_fetch_array($qry_user);
				$_SESSION['id_user'] = $data_user['id_user'];
				$_SESSION['sesi'] = $data_user['username'];
				$id_user = $_SESSION['id_user'];

				echo "<script>alert('Anda berhasil Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=users?hal=home&id=$id_user'>";
			}
			else {
				echo "<meta http-equiv='refresh' content='0; url=index.php?hal=login-user'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
	}
	else
	{
	  include "index.php?hal=register";
	}
?>
