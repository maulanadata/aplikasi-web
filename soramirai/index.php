<?php
  $hal = $_GET['hal'];
  include "koneksi.php";
?>
<!doctype html>
<html lang="en">
<head>
	<?php include "header.php";?>
</head>

<body>
<div id="container">
	<div id="header">
		<?php include "bodyheader.php";?>
	</div>

	<div id="navigasi">
		<?php include "navbar.php";?>
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
		<?php include "footer.php";?>
	</div>
</div>


</body>
</html>
