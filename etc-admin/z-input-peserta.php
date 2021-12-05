<?php

	if(isset($_POST['submit'])) {
		include "../config/koneksi.php";

		$no_pend = $_POST['no_pendaftaran'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$asal_sekolah = $_POST['asal_sekolah'];
		$nis = $_POST['nis'];

		$sql = "INSERT INTO hasil(no_pendaftaran, nama, jurusan, asal_sekolah, nis) VALUES ('$no_pend','$nama','$jurusan','$asal_sekolah','$nis')";
		$cetak = mysqli_query($con, $sql);

		if ($cetak) {
			echo "<script>alert(\" Data Berhasil Di Daftarkan \");</script>";
		}else{

			echo "<script>alert(\" Data Gagal Di Daftarkan \");</script>";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Input Siswa Di Terima</title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
	<style type="text/css">
	* {
		padding: 0;
		margin: 0;
	}
	form {
		margin-top: 15px;
		padding: 10px;
	}
	.form-group input[type="text"] {
		border-radius: 0%;
		border-top: none;
		border-right: none;
		border-left: none;
		background: transparent;
		box-shadow: none;
		border-bottom: 2px solid transparent;
	}
	.form-group input[type="text"]:focus {
		border-color: #000;
	}
	.form-group input[type="number"] {
		border-radius: 0%;
		border-top: none;
		border-right: none;
		border-left: none;
		background: transparent;
		box-shadow: none;
		border-bottom: 2px solid transparent;
	}
	.form-group input[type="number"]:focus {
		border-color: #000;
	}
	.form-group input[type="submit"] {
			border: 1px solid #102ed7;
			border-radius: 5px;
			top: 0;
			padding: 8px;
			width: 30%;
			background: none;
			color: #000;
		}
	.form-group input[type="submit"]:hover {
			background: #102ed7;
			color: #fff;
		}
	.form-group input[type="reset"] {
			border: 1px solid black;
			border-radius: 5px;
			top: 0;
			padding: 8px;
			width: 30%;
			background: none;
			color: #000;
		}
	.form-group input[type="reset"]:hover {
			background: #000;
			color: #fff;
		}
	</style>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<form class="form-horizontal" method="POST">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel panel-heading text-center">
					<h3>Form Input Siswa Di Terima</h3>
				</div>
				<div class="panel panel-body">
					<div class="form-group">
						<label class="col-md-3 control-label">NISN :</label>
						<div class="col-md-6">
    				<select class="form-control" id="NISN">
				        <?php
					        include "../config/koneksi.php";
					        $sql = "SELECT * FROM peserta_ppdb";
					        $query = mysqli_query($con,$sql);
						        foreach ($query as $q){
						            echo "<option name='nis' value='$q[nis]'> $q[nis] - $q[nama]</option>";    
						        }
						?>
					</select>
					</div>
					<div class="col-md-3">
						<input type="submit" name="search" class="form-control" value="Search" style="padding: 5.5px 0 10px 0"; />
					</div>
				</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Nama Peserta :</label>
						<div class="col-md-6">
							<input type="text" name="nama" class="form-control input-md" placeholder="Masukkan Nama Peserta"	>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Jurusan Yang Terpilih :</label>
						<div class="col-md-6">
							<select name="jurusan" class="form-control">
								<option disabled>-- Pilih Salah Satu --</option>
								<option value="1">Rekayasa Perangkat Lunak</option>
								<option value="2">Multimedia</option>
								<option value="3">Teknik Komputer & Jaringan</option>
								<option value="4">Teknik Pengolahan Hasil Pertanian</option>
								<option value="5">Teknis Sepeda Motor</option>
								<option value="6">Teknik Kendaraan Jaringan</option>
								<option value="7">Teknik Ototronik</option>
							</select>
						</div>
					</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Asal Sekolah :</label>
					<div class="col-md-6">
						<textarea class="form-control" name="asal_sekolah" placeholder="Masukkan Alamat Sekolah" style="resize: none;"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Nomor Pendaftaran :</label>
					<div class="col-md-6">
						<input type="number" class="form-control input-md" placeholder="Masukkan NISN Peserta" name="no_pendaftaran">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3"></label>
					<div class="col-md-4">
						<input type="submit" value="Tambahkan" name="submit" />
						<input type="reset" name="reset" />
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>
<!-- referensi 
1. https://www.youtube.com/watch?v=V8sIWh_sdvs

	 -->