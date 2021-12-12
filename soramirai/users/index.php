<?php
$hal = $_GET['hal'];
include "../koneksi.php";
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!doctype html>
<html lang="en">
<head>
	<?php include "../header.php";?>
</head>

<body>
<div id="container">
	<div id="header">
		<?php include "../bodyheader.php";?>
	</div>

	<div id="navigasi">
		<?php include "../navbar.php";?>
	</div>
            
	<div id="container2">
		<div id="sidebar">
			<?php include "side.php";?>
		</div>
                
		<div id="content">
		<?php
		if(isset($hal))
		{
			if($hal==''){
				echo "<div style='margin-left:250px; margin-top:200px;'><h2>Halaman yang anda cari tidak ditemukan</h2></div>";
			}else{
				//jika $hal ada isinya
				include "pages/".$hal.".php";
			}
		}else{
			header("Location:./?hal=home");
		}
		?>
		</div>
	</div>
            
	<div id="footer">
		<?php include "../footer.php";?>
	</div>
</div>


</body>
</html>
<?php
}
else {  // jika gagal login atau sudah logout tapi tab lain masih akif maka akan diminta login kembali
	echo "<script> alert('Anda Harus Login Dahulu!'); </script>";
	header('location:../index.php?hal=login-user');
}
?>