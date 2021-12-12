<?php

$id=$_GET['id'];
$q_tampil_user=mysqli_query($db,"SELECT * FROM tbdaftar inner join tbuser on tbdaftar.email = tbuser.email WHERE id_daftar='$id'");
$r_tampil_user=mysqli_fetch_array($q_tampil_user);
?>

<div>
	<br>
<div> <form action="proses/edit.php" method="POST" enctype="multipart/form-data">

<table style="width:90%; margin:auto;">
<th style="width:46%;">

		<input type="hidden" id="id_daftar" class="form-control" value="<?php echo $r_tampil_user['id_daftar']; ?>"  name="id_daftar" >

		<div class="form-group">
		<label for="nama">Nama Lengkap</label>
		<input type="text" id="nama" class="form-control" value="<?php echo $r_tampil_user['nama']; ?>" readonly="readonly" name="nama" >
	</div>

	<div class="form-group">
		<label for="ttl">Tempat, Tanggal Lahir (dd-mm-yyyy)</label>
		<input type="text" id="ttl" class="form-control" value="<?php echo $r_tampil_user['ttl']; ?>" readonly="readonly" name="ttl" >
	</div>

	<div class="form-group">
		<label for="jenis_kelamin" style="margin-bottom:5px;">Jenis Kelamin</label>
		<input type="text" id="jenis_kelamin" class="form-control" value="<?php echo $r_tampil_user['jenis_kelamin']; ?>"readonly="readonly"  name="jenis_kelamin" >
	</div>

	<div class="form-group">
		<label for="alamat">Alamat</label>
		<input type="text" id="alamat" class="form-control" value="<?php echo $r_tampil_user['alamat']; ?>"readonly="readonly"  name="alamat" >
	</div>
	<div class="form-group">
		<label for="status">Status</label>
		<div style="margin-left:20px; margin-bottom:10px;">
		<?php
			if($r_tampil_user['status']=="Diterima"){
				echo "<input type='radio' name='status' value='Diterima' checked>  Diterima
					<input style='margin-left:75px;' type='radio' name='status' value='Cadangan'>  Cadangan <br>
					<input type='radio' name='status' value='Tidak Diterima'>  Tidak Diterima
					<input style='margin-left:30px;' type='radio' name='status' value='Sedang Proses'>  Sedang Proses";
			} elseif($r_tampil_user['status']=="Cadangan"){
				echo "<input type='radio' name='status' value='Diterima'>  Diterima
					<input style='margin-left:75px;' type='radio' name='status' value='Cadangan' checked>  Cadangan <br>
					<input type='radio' name='status' value='Tidak Diterima'>  Tidak Diterima
					<input style='margin-left:30px;' type='radio' name='status' value='Sedang Proses'>  Sedang Proses";
			} elseif($r_tampil_user['status']=="Tidak Diterima"){
				echo "<input type='radio' name='status' value='Diterima'>  Diterima
					<input style='margin-left:75px;' type='radio' name='status' value='Cadangan'>  Cadangan <br>
					<input type='radio' name='status' value='Tidak Diterima' checked>  Tidak Diterima
					<input style='margin-left:30px;' type='radio' name='status' value='Sedang Proses'>  Sedang Proses";
			} elseif($r_tampil_user['status']=="Sedang Proses"){
				echo "<input type='radio' name='status' value='Diterima'>  Diterima
					<input style='margin-left:75px;' type='radio' name='status' value='Cadangan'>  Cadangan <br>
					<input type='radio' name='status' value='Tidak Diterima'>  Tidak Diterima
					<input style='margin-left:30px;' type='radio' name='status' value='Sedang Proses' checked>  Sedang Proses";
			}
		?>
		</div>
	</div>
</th>

<th style="padding:20px;">
	<div class="form-group">
		<label for="sekolah">Nama Sekolah Terakhir</label>
		<input type="text" id="sekolah" class="form-control" value="<?php echo $r_tampil_user['sekolah']; ?>" readonly="readonly" name="sekolah" >
	</div>

	<div class="form-group">
		<label for="hobi">Hobi</label>
		<input type="text" id="hobi" class="form-control" value="<?php echo $r_tampil_user['hobi']; ?>" readonly="readonly" name="hobi" >
	</div>
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" id="username" class="form-control" value="<?php echo $r_tampil_user['username']; ?>" readonly="readonly" name="username" >
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" id="email" class="form-control col-4" value="<?php echo $r_tampil_user['email']; ?>" readonly="readonly" name="email" >
	</div>
	<br><br><br>
</th>
</table> <br>

	<button type="submit" class="btn btn-primary" style="margin-left:60px;" name="ubah">Ubah</button>
	<a href="?hal=siswa-diterima"><button type="button" class="btn btn-danger">Batal</button></a>

</form>

</div>
</div>

