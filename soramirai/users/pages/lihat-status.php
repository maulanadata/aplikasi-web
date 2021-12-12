<?php
	$id_user=$_SESSION['id_user'];
	$q_tampil_user=mysqli_query($db,"SELECT * FROM tbuser WHERE id_user='$id_user'");
	$r_tampil_user=mysqli_fetch_array($q_tampil_user);
?>

<div>
	<br>
<div> <form>
<table style="width:90%; margin:auto;">
<th style="width:46%;">
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
		<input type="text" id="jenis_kelamin" class="form-control" value="<?php echo $r_tampil_user['jenis_kelamin']; ?>" readonly="readonly" name="jenis_kelamin" >
	</div>

	<div class="form-group">
		<label for="alamat">Alamat</label>
		<input type="text" id="alamat" class="form-control" value="<?php echo $r_tampil_user['alamat']; ?>" readonly="readonly" name="alamat" >
	</div>

	<div class="form-group">
		<label for="status">Status</label>
		<input type="text" id="status" class="form-control" style="width:50%;" value="<?php echo $r_tampil_user['status']; ?>" readonly="readonly" name="status" >
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
		<input type="text" id="username" class="form-control" value="<?php echo $r_tampil_user['username']; ?>" readonly="readonly"  name="username" >
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" id="email" class="form-control col-4" value="<?php echo $r_tampil_user['email']; ?>" readonly="readonly" name="email" >
	</div>
	<br><br><br>
</th>
</table>
<div style="margin-left:60px; margin-top:20px" class="tombol-opsi-container"><a target="_blank" href="pages/cetak.php?id=<?php echo $id_user;?>" class="tombol">Cetak Kartu</a></div>

</form>

</div>
</div>