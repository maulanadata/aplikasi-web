<?php
include "../../koneksi.php";

?>

<!-- Membuka CSS -->
<link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
<!-- Menutup CSS -->

<br><div id="label-page"><h3>Siswa Cadangan</h3></div>

<div id="content1" style="margin:auto;">

<table id="tabel-tampil">
	<tr>
		<th id="label-tampil-no" style='width:40px'>No</td>
		<th style='width:150px'>Nama</th>
		<th style='width:200px'>Tempat, Tanggal Lahir</th>
		<th style='width:80px'>Jenis Kelamin</th>
		<th>Alamat</th>
		<th style='width:200px'>Sekolah</th>
		<th style='width:100px'>Hobi</th>
		<th style='width:80px'>Akan Belajar</th>
		<th style='width:100px'>Email</th>
		<th style='width:120px'>Status</th>
	</tr>


	<?php
	$batas = 5;
	extract($_GET);
	if(empty($hal)){
		$posisi = 0;
		$hal = 1;
		$nomor = 1;
	}
	else {
		// $posisi = ($hal - 1) * $batas;
		$posisi = 0;
		$nomor = $posisi+1;
	}	


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$query = "SELECT * FROM tbdaftar LIMIT $posisi, $batas";
		$queryJml = "SELECT * FROM tbdaftar";
		$no = $posisi * 1;
	}
	else {
		$query = "SELECT * FROM tbdaftar LIMIT $posisi, $batas";
		$queryJml = "SELECT * FROM tbdaftar WHERE status='Cadangan'";
		$no = $posisi * 1;
	}


	//$sql="SELECT * FROM tbdaftar ORDER BY id_daftar DESC";
	$q_tampil_daftar = mysqli_query($db, $queryJml);
	if(mysqli_num_rows($q_tampil_daftar)>0)
	{
	while($r_tampil_daftar=mysqli_fetch_array($q_tampil_daftar)){
	$id_daftar = $r_tampil_daftar['id_daftar'];
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
	</tr>
	<?php $nomor++; } 
	}?>
</table>


<div style="float: left; margin-top:8px; margin-right:10px;">
<?php
	$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Jumlah Data : <b>$jml</b>";
?>
</div>

<div class="pagination">
<?php
	$jml_hal = ceil($jml/$batas);
	for($i=1; $i<=$jml_hal; $i++){
		if($i != $hal){
			echo "<a href=\"?p=daftar&hal=$i\">$i</a>";
		}
		else {
			echo "<a class=\"active\">$i</a>";
		}
	}
?>
</div>

</div>

<script>
		window.print();
</script>