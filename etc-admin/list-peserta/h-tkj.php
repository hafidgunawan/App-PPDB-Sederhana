<?php
	include "../../config/koneksi.php";

	$sql = "SELECT * FROM seleksi_jurusan WHERE id_jurusan1='3' OR id_jurusan2='3' ORDER BY (n_bin + n_mtk + n_ipa + n_bing) DESC";
	$q = mysqli_query($con,$sql);

	function jurusanSatu($idJr, $koneksi){
	$sql = "SELECT jurusan FROM jurusan WHERE id_jurusan='$idJr'";
	$data = mysqli_query($koneksi, $sql);
	$jur = mysqli_fetch_assoc($data);
	return $jur['jurusan'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Siswa TKJ</title>
</head>
<body>
	<table border="1" cellpadding="20" style="text-align: center;">
		<tr>
			<th>NISN</th>
			<th>NAMA</th>
			<!-- <th>JURUSAN 1</th>
			<th>JURUSAN 2</th> -->
			<th>RATA-RATA</th>
		</tr>
		<?php

		while ($row = mysqli_fetch_array($q)) {
		?>
		<tr>
			<td><?php echo $row['nis'] ?></td>
			<td><?php echo $row['nama'] ?></td>
			<!-- <td><?php echo $row['asal_sekolah'] ?></td> -->
			<!-- <td><?php // echo jurusanSatu($row['id_jurusan1'], $con); ?></td> -->
			<!-- <td><?php // echo jurusanSatu($row['id_jurusan2'], $con); ?></td> -->
			<td><?php 
					$hasil = $row['n_bin'] + $row['n_mtk'] + $row['n_ipa'] + $row['n_bing'];
					echo $hasil;
				?>	
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>