<div id="content1">

	<FORM CLASS="form-inline" METHOD="POST" id="tombol-tambah-container">
		<a href="pages/calon-cetak.php" class="tombol">Cetak Calon Siswa</a>
	</FORM>

<table id="tabel-tampil">
	<tr>
		<th id="label-tampil-no" style='width:40px'>No</td>
		<th style='width:150px'>Nama</th>
		<th style='width:150px'>Tempat, Tanggal Lahir</th>
		<th style='width:80px'>Jenis Kelamin</th>
		<th>Alamat</th>
		<th style='width:100px'>Sekolah</th>
		<th style='width:100px'>Hobi</th>
		<th style='width:80px'>Akan Belajar</th>
		<th style='width:100px'>Email</th>
		<th style='width:120px'>Status</th>
		<th style='width:170px' id="label-opsi">Opsi</th>
	</tr>


	<?php
	$batas = 5;
	extract($_GET);
	if(empty($page)){
		$posisi = 0;
		$page = 1;
		$nomor = 1;
	}
	else {
		$posisi = ($page - 1) * $batas;
		$nomor = $posisi+1;
	}	


	$query = mysqli_query($db, "SELECT * FROM tbuser LIMIT $posisi, $batas");


	//$sql="SELECT * FROM tbuser ORDER BY id_user DESC";
	$q_tampil_daftar = mysqli_query($db, "SELECT * FROM tbuser WHERE status='Sedang Proses'");
	if(mysqli_num_rows($q_tampil_daftar)>0)
	{
	while($r_tampil_daftar=mysqli_fetch_array($q_tampil_daftar)){
	$id_user = $r_tampil_daftar['id_user'];
	?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $r_tampil_daftar['nama']; ?></td>
		<td><?php echo $r_tampil_daftar['ttl']; ?></td>
		<td><?php echo $r_tampil_daftar['jenis_kelamin']; ?></td>
		<td><?php echo $r_tampil_daftar['alamat']; ?></td>
		<td><?php echo $r_tampil_daftar['sekolah']; ?></td>
		<td><?php echo $r_tampil_daftar['hobi']; ?></td>
		<td><?php echo $r_tampil_daftar['belajar']; ?></td>
		<td><?php echo $r_tampil_daftar['email']; ?></td>
		<td><?php echo $r_tampil_daftar['status']; ?></td>
		<td>
			<div style='padding:2px' class="tombol-opsi-container"><a target="_blank" href="pages/calon-kartu.php?id=<?php echo $r_tampil_daftar['id_user'];?>" class="tombol">Cetak Kartu</a></div>
			<div style='padding:2px' class="tombol-opsi-container"><a href="index.php?page=calon-edit&id=<?php echo $r_tampil_daftar['id_user'];?>" class="tombol">Edit</a></div>
			<div style='padding:2px' class="tombol-opsi-container"><a href="proses/calon-hapus.php?id=<?php echo $r_tampil_daftar['id_user']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol">Hapus</a></div>
		</td>
	</tr>
	<?php $nomor++; } 
	}?>
</table>


<div style="float: left; margin-top:8px;">
<?php
	$jml = mysqli_num_rows(mysqli_query($db, "SELECT * FROM tbuser WHERE status='Sedang Proses'"));
		echo "Jumlah Data : <b>$jml</b>";
?>
</div>

<div class="pagination" style="margin-left:3cm">
<?php
	$jml_page = ceil($jml/$batas);
	for($i=1; $i<=$jml_page; $i++){
		if($i != $page){
			echo "<a href=\"?hal=siswa-calon&page=$i\">$i</a>";
		}
		else {
			echo "<a class=\"active\">$i</a>";
		}
	}
?>
</div>

</div>
</div>