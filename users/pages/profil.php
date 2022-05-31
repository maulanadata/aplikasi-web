<?php
	$id_user=$_SESSION['id_user'];
	$q_tampil_user=mysqli_query($db,"SELECT * FROM tbuser WHERE id_user='$id_user'");
	$r_tampil_user=mysqli_fetch_array($q_tampil_user);
?>

<div class="jumbotronton">
	<br>
<div> <form action="proses/siswa-input.php" method="POST" enctype="multipart/form-data">

<input type="hidden" id="id_user" class="form-control col-4" value="<?php echo $r_tampil_user['id_user']; ?>" name="id_user">

<table style="width:90%">
<th style="width:46%;">
	<div class="form-group">
		<label for="nama">Nama Lengkap</label>
		<input type="text" id="nama" class="form-control" value="<?php echo $r_tampil_user['nama']; ?>" name="nama" >
	</div>

	<div class="form-group">
		<label for="ttl">Tempat, Tanggal Lahir (dd-mm-yyyy)</label>
		<input type="text" id="ttl" class="form-control" value="<?php echo $r_tampil_user['ttl']; ?>" readonly="readonly" name="ttl" >
	</div>

	<div class="form-group">
		<label for="jenis_kelamin" style="margin-bottom:5px;">Jenis Kelamin</label><br>
		<div style="margin-left:30px; margin-bottom:10px;">
		<?php
			if($r_tampil_user['jenis_kelamin']=="Pria"){
				echo "<input type='radio' name='jenis_kelamin' value='Pria' checked>  Pria
					<input style='margin-left:30px;' type='radio' name='jenis_kelamin' value='Wanita'>  Wanita";
			} elseif($r_tampil_user['jenis_kelamin']=="Wanita"){
				echo "<input type='radio' name='jenis_kelamin' value='Pria'>  Pria
					<input style='margin-left:30px;' type='radio' name='jenis_kelamin' value='Wanita' checked>  Wanita";
			}
		?> </div>
	</div>

	<div class="form-group">
		<label for="alamat">Alamat</label>
		<input type="text" id="alamat" class="form-control" value="<?php echo $r_tampil_user['alamat']; ?>" name="alamat" >
	</div>
</th>

<th style="padding:20px;">
	<div class="form-group">
		<label for="sekolah">Nama Sekolah Terakhir</label>
		<input type="text" id="sekolah" class="form-control" value="<?php echo $r_tampil_user['sekolah']; ?>" name="sekolah" >
	</div>

	<div class="form-group">
		<label for="hobi">Hobi</label>
		<input type="text" id="hobi" class="form-control" value="<?php echo $r_tampil_user['hobi']; ?>" name="hobi" >
	</div>
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" id="username" class="form-control" value="<?php echo $r_tampil_user['username']; ?>" name="username" >
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" id="email" class="form-control col-4" value="<?php echo $r_tampil_user['email']; ?>" readonly="readonly" name="email" >
	</div>
</th>
</table><br>
	<button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
	<a href="?hal=home"><button type="button" class="btn btn-danger">Batal</button></a>

</form>

</div>
</div>