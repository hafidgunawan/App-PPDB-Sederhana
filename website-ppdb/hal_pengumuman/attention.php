<?php 
	include "../../config/koneksi.php";

	$sql = "SELECT * FROM pengumuman";
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
	<title></title>
</head>
<body>
	<table border="1" cellpadding="10" style="margin: 0px auto!important;">
		<tr>
			<th>NISN</th>
			<th>NAMA</th>
			<th>JURUSAN</th>
			<th>ASAL SEKOLAH</th>		
		</tr>
		<?php 
			while ($row = mysqli_fetch_array($q)) {
		?>
		<tr>
			<td><?php echo $row['nis'] ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td><?php echo jurusanSatu($row['jurusan'], $con); ?></td>
			<td><?php echo $row['asal_sekolah'] ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>