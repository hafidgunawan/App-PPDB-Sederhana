<?php
	session_start();
include "../config/koneksi.php";

	 $nisa = $_GET['nis'];
	 $nia = $_SESSION['nis'] = $nisa;

	if(isset($_POST['submit'])) {

	$nisn = $_POST['nis'];
	$nama = $_POST['nama'];
	$tempat = $_POST['tempat_lahir'];
	$tgl = $_POST['tgl_lahir'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$alamat = $_POST['alamat'];
	$no = $_POST['no_telp'];
	$jurusan1 = $_POST['jurusan1'];
	$jurusan2 = $_POST['jurusan2'];

	$sql = "UPDATE peserta_ppdb SET nis='$nisn', nama='$nama', tempat_lahir='$tempat', tgl_lahir='$tgl', id_jk='$jk', id_agama='$agama', asal_sekolah='$asal_sekolah', alamat='$alamat', no_telp='$no', id_jurusan1='$jurusan1', id_jurusan2='$jurusan2' WHERE nis='$nisa'";

	$hasil = mysqli_query($con, $sql);
	if ($hasil) {
		echo "<script type='text/javascript'>alert(\"Perubahan telah berhasil ditambahkan\");</script>";
		header("location: ubah-data2.php", $nia);
	}else{
		echo "Perubahan gagal ditambahkan";
	}
}

	$sql = "SELECT nis,nama,tempat_lahir,tgl_lahir,id_jk,id_agama,asal_sekolah,alamat,no_telp,id_jurusan1,id_jurusan2 FROM peserta_ppdb WHERE nis='$nisa'";

	$eks = mysqli_query($con, $sql);
	$hasil = mysqli_fetch_array($eks);

	function jenisKelamin($idJk, $koneksi){
	$sql = "SELECT jenis_kelamin FROM jeniskelamin WHERE id_jk='$idJk'";
	$data = mysqli_query($koneksi, $sql);
	$jenis = mysqli_fetch_assoc($data);
	return $jenis['jenis_kelamin'];
	}
	function namaAgama($idAgama, $koneksi){
	$sql = "SELECT nama_agama FROM agama WHERE id_agama='$idAgama'";
	$data = mysqli_query($koneksi, $sql);
	$agama = mysqli_fetch_assoc($data);
	return $agama['nama_agama'];
	}
	function jurusanSatu($idJr, $koneksi){
	$sql = "SELECT jurusan FROM jurusan WHERE id_jurusan='$idJr'";
	$data = mysqli_query($koneksi, $sql);
	$jur = mysqli_fetch_assoc($data);
	return $jur['jurusan'];
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
	<title>Form Edit</title>
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
			<div class="form-group">
				<label class="col-md-4 control-label">Nomor Induk Siswa Nasional (NISN) :</label>
				<div class="col-md-4">
					<input type="text" name="nis" placeholder="Masukkan NISN" class="form-control input-md" value="<?php echo $hasil['nis']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Nama Peserta :</label>
				<div class="col-md-4">
					<input type="text" name="nama" placeholder="Masukkan Nama Peserta" class="form-control input-md"  value="<?php echo $hasil['nama']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Tempat Lahir :</label>
				<div class="col-md-4">
					<input type="text" name="tempat_lahir" placeholder="Contoh : Madiun" class="form-control input-md" value="<?php echo $hasil['tempat_lahir']; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Tgl Lahir :</label>
				<div class="col-md-4">
					<input type="date" name="tgl_lahir" class="form-control input-md" value="<?php echo $hasil['tgl_lahir']; ?>">
				</div>
			</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Jenis Kelamin :</label>
  		<div class="col-md-2">
  			<select name="jenis_kelamin" class="form-control">
  				<option value="<?php echo $hasil['id_jk'] ?>"><?php echo jenisKelamin($hasil['id_jk'], $con); ?></option>
      			<option value="1">Laki-Laki</option>
      			<option value="2">Perempuan</option>
    		</select>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Agama :</label>
  		<div class="col-md-2">
  			<select name="agama" class="form-control">
  				<option value="<?php echo $hasil['id_agama'] ?>"><?php echo namaAgama($hasil['id_agama'], $con); ?></option>
      			<option value="1">Islam</option>
      			<option value="2">Kristen</option>
      			<option value="3">Katolik</option>
      			<option value="4">Hindhu</option>
      			<option value="5">Budha</option>
      			<option value="6">Kong Hu Cu</option>
    		</select>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">Asal Sekolah :</label>
  		<div class="col-md-4">                     
    		<textarea class="form-control" name="asal_sekolah"><?php echo $hasil['asal_sekolah']; ?></textarea>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label" for="Alamat tinggal">Alamat Tempat Tinggal :</label>
  		<div class="col-md-4">                     
    		<textarea class="form-control" name="alamat"><?php echo $hasil['alamat']; ?></textarea>
  		</div>
	</div>
	<div class="form-group">
  		<label class="col-md-4 control-label">No Telpon :</label>  
  		<div class="col-md-4">
  			<input name="no_telp" type="text" placeholder="No WA/Telegram/FB" class="form-control input-md" value="<?php echo $hasil['no_telp'] ?>">
  			<span class="help-block" style="color: #fff; font-weight: bold;">*Note : No Telpon harus bisa dihubungi</span>  
  		</div>
	</div>
	<div class="form-group">
        <label class="col-md-4 control-label">Jurusan Pertama :</label>
        <div class="col-md-4">
            <select name="jurusan1" class="form-control">
                <option value="<?php echo $hasil['id_jurusan1'] ?>"><?php echo jurusanSatu($hasil['id_jurusan1'], $con); ?></option>
                <option value="1"> Rekayasa Perangkat Lunak </option>
                <option value="2"> Multimedia </option>
                <option value="3"> Teknik Komputer & Jaringan </option>
                <option value="4"> Design Graphic </option>
            </select>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-md-4 control-label">Jurusan Kedua ( Cadangan ) :</label>
        <div class="col-md-4">
            <select name="jurusan2" class="form-control">
                <option value="<?php echo $hasil['id_jurusan2'] ?>"><?php echo jurusanSatu($hasil['id_jurusan2'], $con); ?></option>
                <option value="1"> Rekayasa Perangkat Lunak </option>
                <option value="2"> Multimedia </option>
                <option value="3"> Teknik Komputer & Jaringan </option>
                <option value="4"> Design Graphic </option>
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
