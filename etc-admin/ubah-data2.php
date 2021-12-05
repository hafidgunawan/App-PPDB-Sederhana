<?php
// Mengawali Session
session_start();
include "../config/koneksi.php";
	
	// Mengambil NIS dari form sebelumnya, menggunakan Session
	 $nia = $_SESSION['nis'];
	 $nisa = $nia;

	// Inputnya
	if(isset($_POST['submit'])) {
	$nisn = $_POST['nis'];

	$nama_ayah = $_POST['nama_ayah'];
	$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
	$penghasilan_ayah = $_POST['penghasilan_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
	$penghasilan_ibu = $_POST['penghasilan_ibu'];

	$sql = "UPDATE biodata_ortu SET nama_ayah='$nama_ayah', id_pekerjaan_ayah='$pekerjaan_ayah', id_penghasilan_ayah='$penghasilan_ayah', nama_ibu='$nama_ibu', id_pekerjaan_ibu='$pekerjaan_ibu', id_penghasilan_ibu='$penghasilan_ibu' WHERE nis='$nisa'";

	$hasil = mysqli_query($con, $sql);
	if ($hasil) {
		echo "<script type='text/javascript'>alert(\"Perubahan telah berhasil ditambahkan\");</script>";
		header("location: dashboard.php");
	}else{
		echo "<script type='text/javascript'>alert(\"Perubahan telah gagal ditambahkan\");</script>";
	}
}

	$sql = "SELECT nis,nama_ayah,id_pekerjaan_ayah,id_penghasilan_ayah,nama_ibu,id_pekerjaan_ibu,id_penghasilan_ibu FROM biodata_ortu WHERE nis='$nisa'";

	$eks = mysqli_query($con, $sql);
	$hasil = mysqli_fetch_array($eks);

	function pekerjaanOrtu($idPk, $koneksi){
	$sql = "SELECT nama_pekerjaan FROM pekerjaan_ortu WHERE id_pekerjaan_ortu='$idPk'";
	$data = mysqli_query($koneksi, $sql);
	$pk = mysqli_fetch_assoc($data);
	return $pk['nama_pekerjaan'];
	}
	function penghasilanOrtu($idOrtu, $koneksi){
	$sql = "SELECT penghasilan_ortu FROM penghasilan_ortu WHERE id_penghasilan_ortu='$idOrtu'";
	$data = mysqli_query($koneksi, $sql);
	$penghasilan = mysqli_fetch_assoc($data);
	return $penghasilan['penghasilan_ortu'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
<!-- <link rel="stylesheet" type="text/css" href="../assets/css/tcss.css"> -->
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<style type="text/css">
	body {
		/*background: linear-gradient(rgba(0,0,50,0.30), rgba(0,0,150,0.70));*/
		/*background: #000;*/	
	}
	body h3 {
		color: #000;
		font-size: 30px;
	}
	form fieldset label {
		color: #000;
		font-weight: bold;
		font-family: monospace;
	}
</style>
</head>
<body>
	<form class="form-horizontal" method="POST">
		<fieldset>
			<legend><h3 class="text-center"><span class="fa fa-user"> FORM EDIT PESERTA PPDB</span></h3></legend>
	<input type="hidden" name="nis">
	<label><h3 style="font-weight: bold; margin-top: 0;">B. Data Orang Tua Wali Murid</h3></label>
    <div class="form-group">
        <label class="col-md-4 control-label">Nama Ayah :</label>
        <div class="col-md-4">
            <input type="text" name="nama_ayah" placeholder="Masukkan Nama Ayah" class="form-control input-md" value="<?php echo $hasil['nama_ayah'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Pekerjaan Ayah :</label>
        <div class="col-md-4">
            <select name="pekerjaan_ayah" class="form-control">
                <option value="<?php echo $hasil['id_pekerjaan_ayah'] ?>"><?php echo pekerjaanOrtu($hasil['id_pekerjaan_ayah'], $con); ?></option>
                <option value="1"> Wiraswasta </option>
                <option value="2"> Petani </option>
                <option value="3"> Guru </option>
                <option value="4"> Tentara </option>
                <option value="5"> Nelayan </option>
                <option value="6"> Novelis </option>
                <option value="7"> Programmer </option>
                <option value="8"> Ibu Rumah Tanngga </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Penghasilan Ayah :</label>
        <div class="col-md-4">
            <select name="penghasilan_ayah" class="form-control">
            	<option value="<?php echo $hasil['id_penghasilan_ayah'] ?>"><?php echo penghasilanOrtu($hasil['id_penghasilan_ayah'], $con); ?></option>
                <option value="1"> < 500.000 </option>
                <option value="2"> > 500.000 </option>
                <option value="3"> 1.250.000 </option>
                <option value="4"> 1.500.000 </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Nama Ibu :</label>
        <div class="col-md-4">
            <input type="text" name="nama_ibu" placeholder="Masukkan Nama Ayah" class="form-control input-md" value="<?php echo $hasil['nama_ibu'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Pekerjaan Ibu :</label>
        <div class="col-md-4">
            <select name="pekerjaan_ibu" class="form-control">
                <option value="<?php echo $hasil['id_pekerjaan_ibu'] ?>"><?php echo pekerjaanOrtu($hasil['id_pekerjaan_ibu'], $con); ?></option>
                <option value="1"> Wiraswasta </option>
                <option value="2"> Petani </option>
                <option value="3"> Guru </option>
                <option value="4"> Tentara </option>
                <option value="5"> Nelayan </option>
                <option value="6"> Novelis </option>
                <option value="7"> Programmer </option>
                <option value="8"> Ibu Rumah Tanngga </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Penghasilan Ibu :</label>
        <div class="col-md-4">
            <select name="penghasilan_ibu" class="form-control">
            	<option value="<?php echo $hasil['id_penghasilan_ibu'] ?>"><?php echo penghasilanOrtu($hasil['id_penghasilan_ibu'], $con); ?></option>
                <option value="1"> < 500.000 </option>
                <option value="2"> > 500.000 </option>
                <option value="3"> 1.250.000 </option>
                <option value="4"> 1.500.000 </option>
            </select>
        </div>
    </div>
    <div class="form-group">
		<label class="col-md-4 control-label"></label>
		<div class="col-md-4">
			<input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-default">
			<a href="dashboard.php" class="btn btn-warning"><< Kembali</a>
		</div>
	</div>
</body>
</html>