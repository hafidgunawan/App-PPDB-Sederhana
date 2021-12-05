	<?php
	include "../config/koneksi.php";

		$sql = "SELECT 	nis, nama, tempat_lahir, tgl_lahir, id_jk, id_agama, asal_sekolah, alamat, no_telp, nama_ortu, id_penghasilan_ortu FROM peserta_ppdb";
		$data = mysqli_query($con, $sql);

		function jenisKelamin($idJk, $koneksi){
		$sql = "SELECT jenis_kelamin FROM jeniskelamin WHERE id_jk='$idJk'";
		$data = mysqli_query($koneksi, $sql);
		$jenis = mysqli_fetch_assoc($data);
		//die mysqli_error($koneksi)
		return $jenis['jenis_kelamin'];
		}
		function namaAgama($idAgama, $koneksi){
		$sql = "SELECT nama_agama FROM agama WHERE id_agama='$idAgama'";
		$data = mysqli_query($koneksi, $sql);
		$agama = mysqli_fetch_assoc($data);
		//die mysqli_error($koneksi)
		return $agama['nama_agama'];
		}
		function penghasilanOrtu($idOrtu, $koneksi){
		$sql = "SELECT penghasilan_ortu FROM penghasilan_ortu WHERE id_penghasilan_ortu='$idOrtu'";
		$data = mysqli_query($koneksi, $sql);
		$penghasilan = mysqli_fetch_assoc($data);
		//die mysqli_error($koneksi)
		return $penghasilan['penghasilan_ortu'];
		}
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Abdul Hafid Gunawan" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta rel="shortcut icon" href="">
		<title>Halaman Peserta PPDB</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	</head>
	<body>
		<header>
				<div class="container-fluid">
					<div class="container text-center">
						<h2 style="font-weight: bold;">List Data Peserta PPDB</h2>
						<hr>
					</div>
				</div>
		</header>
		<!--========================================== BATAS HEADER ==========================================-->
		<div class="container-fluid">
				<div class="col-md-12">
					<table class="table table-responsive table-bordered"> 
						<tr class="active">
							<th>No</th>
							<th>NISN</th>
							<th>Nama Peserta</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th width="">Tanggal Lahir</th>
							<th width="">Agama</th>
							<!-- <th width="">Asal Sekolah</th> -->
							<!-- <th width="">Alamat Peserta</th> -->
							<th width="">No Telpon</th>
							<!-- <th width="">Nama Orang Tua</th> -->
							<!-- <th width="">Penghasilan Orang Tua</th> -->
						</tr>
					<?php
					  $halaman = 10;
					  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					  $result = mysqli_query($con, "SELECT * FROM peserta_ppdb");
					  $total = mysqli_num_rows($result);
					  $pages = ceil($total/$halaman);            
					  $query = mysqli_query($con, "select * from peserta_ppdb LIMIT $mulai, $halaman");
					  $no =$mulai+1;

						// foreach ($data as $row):
					   while ($data = mysqli_fetch_assoc($query)) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nis'] ?></td>
							<td><?php echo $data['nama'] ?></td>
							<td><?php echo jenisKelamin($data['id_jk'], $con); ?></td>
							<td><?php echo $data['tempat_lahir'] ?></td>
							<td><?php echo $data['tgl_lahir'] ?></td>
							<td><?php echo namaAgama($data['id_agama'], $con); ?></td>
							<!-- <td><?php echo $data['asal_sekolah']; ?></td>
							<td><?php echo $data['alamat'] ?></td> -->
							<td><?php echo $data['no_telp'] ?></td>
							<!-- <td><?php echo $data['nama_ortu']; ?></td>
							<td><?php echo penghasilanOrtu($data['id_penghasilan_ortu'], $con); ?></td> -->
							</tr>
					<?php  } // endforeach; ?>
					</table>
					<div class="pagination" style="margin-top:10px;">
					  <?php for ($i=1; $i<=$pages ; $i++){ ?>
					  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

					  <?php } ?>

					</div>
			</div>
		</div>
	</body>
	</html>
