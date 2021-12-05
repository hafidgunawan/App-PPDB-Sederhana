<?php
	include "../config/koneksi.php";

	$sql = "SELECT * FROM hasil ORDER BY nis ASC";
	$data = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 15px;">
		<table class="table table-responsive table-bordered">
			<tr>
				<th width="5%">No</th>
				<th>NISN</th>
				<th>Nama</th>
				<th>Jurusan</th>
				<th>Asal Sekolah</th>
			</tr>
			<?php
				$no =+1 . ".";
				foreach ($data as $row):
			 ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nis']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
				<td><?php echo $row['asal_sekolah']; ?></td>
			</tr>
			<?php
			 endforeach; 
			 ?>
		</table>
	</div>
</body>
</html>