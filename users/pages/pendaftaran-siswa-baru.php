<?php
	$id_user=$_SESSION['id_user'];
	$q_tampil_user=mysqli_query($db,"SELECT * FROM tbuser WHERE id_user='$id_user'");
	$r_tampil_user=mysqli_fetch_array($q_tampil_user);
?>

<?php 
if(!($r_tampil_user['nama'])){ ?>  <!-- jika nama user tidak ada di database, maka form akan akif -->
	<div class="jumbotronton">
		<br>
	<div> <form action="proses/siswa-input.php" method="POST" enctype="multipart/form-data">

	<input type="hidden" id="id_user" class="form-control col-4" value="<?php echo $r_tampil_user['id_user']; ?>" name="id_user">

	<table style="width:90%">
	<th style="width:46%;">
		<div class="form-group">
			<label for="nama">Nama Lengkap</label>
			<input type="text" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" name="nama">
		</div>

		<div class="form-group">
			<label for="ttl">Tempat, Tanggal Lahir (dd-mm-yyyy)</label>
			<input type="text" id="ttl" class="form-control" placeholder="Masukkan Tempat, Tanggal Lahir" name="ttl">
		</div>

		<div class="form-group">
			<label for="jenis_kelamin" style="margin-bottom:5px;">Jenis Kelamin</label><br>
			<div style="margin-left:30px; margin-bottom:10px;"><input type="radio" id="jenis_kelamin" value="Pria" name="jenis_kelamin"> Pria
			<input style="margin-left:30px;" type="radio" id="jenis_kelamin" value="Wanita" name="jenis_kelamin"> Wanita </div>
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea rows="2.8" cols="40"class="form-control col-4" placeholder="Masukkan Alamat" name="alamat" ></textarea>
		</div>
	</th>
	<th style="padding:20px;">
		<div class="form-group">
			<label for="sekolah">Nama Sekolah Terakhir</label>
			<input type="text" id="sekolah" class="form-control" placeholder="Masukkan Nama Sekolah terakhir" name="sekolah">
		</div>

		<div class="form-group">
			<label for="hobi">Hobi</label>
			<input type="text" id="hobi" class="form-control" placeholder="Masukkan Hobi Anda" name="hobi">
		</div>
		<div class="form-group">
			<label for="belajar" style="margin-bottom:5px;">Belajar Untuk Level</label><br>
			<div style="margin-left:30px; margin-bottom:10px;"><input type="radio" id="belajar" value="JLPT N5" name="belajar"> JLPT N5
			<input style="margin-left:30px;" type="radio" id="belajar" value="JLPT N4 " name="belajar"> JLPT N4 
			<input style="margin-left:30px;" type="radio" id="belajar" value="JLPT N3 " name="belajar"> JLPT N3 
			<input style="margin-left:30px;" type="radio" id="belajar" value="JLPT N2 " name="belajar"> JLPT N2 </div>
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" class="form-control col-4" value="<?php echo $r_tampil_user['email']; ?>" readonly="readonly" name="email">
		</div>
	</th>
	</table><br>
		<button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
		<a href="?hal=home"><button type="button" class="btn btn-danger">Batal</button></a>
	</form>

	</div>
	</div>
<?php 
} else{  // <!-- jika nama user sudah ada di database, maka form akan non-akif -->
	echo "
	<div class='text-center' style='height:40px;'>
		<br>
		<br>
		<br>
		<h1> Anda Sudah Mendaftar, <br>
		Silahkan Cek di <b><i>Status Pendaftaran</i></b> </h1>
	</div>
	";
} ?>