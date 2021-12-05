<?php
$dokumen = 'Formulir Pendaftaran Siswa';//Nama Dokumen
define('_MPDF_PATH', '../../report/');//letak folder mpdf
include _MPDF_PATH."mpdf.php";//panggil mpdf.php
$mpdf = new mPDF('utf-8', 'A4');// Create new mPDF Document
ob_start();

if (isset($_GET['pdf'])) {
	$nis = $_GET['pdf'];
} else {
	$nis = "";
}
;
include_once '../../config/koneksi.php';
$sql = "SELECT * FROM laporan_hasil WHERE nis ='$nis'";
$q = mysqli_query($con,$sql);

?>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<table border="0" width="100%">
		<?php
			while ($row = mysqli_fetch_array($q)) {
		?>
		<tr>
			<td colspan="3" align="center"><h1>FORMULIR PENDAFTARAN</h1></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><h1><?php // echo $row['nis'];?>SMKN 1 Mejayan</h1></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><hr></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3" align="left"><h4>A.&nbsp;Data pribadi</h4></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			NISN</td>
			<td>:</td>
			<td><?php echo $row['nis'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nama</td>
			<td>:</td>
			<td><?php echo $row['nama'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Jenis Kelamin</td>
			<td>:</td>
			<td><?php $jk = $row['id_jk']; if ($jk == 1) {
	echo 'Laki-laki';
} else {
	echo 'Perempuan'; 
}?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			TTL</td>
			<td>:</td>
			<td><?php echo $row['tempat_lahir'].", ".$row['tgl_lahir'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Alamat</td>
			<td>:</td>
			<td><?php echo $row['alamat'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Agama</td>
			<td>:</td>
			<td><?php $i = $row['id_agama']; 
					if ($i == 1) {
						echo "Islam";
					}elseif($i == 2) {
						echo "Kristen";
					}elseif($i == 3) {
						echo "Katolik";
					}elseif($i == 4) {
						echo "Hindu";
					}elseif($i == 5) {
						echo "Budha";
					}elseif($i == 6) {
						echo "Kong Hu Cu";
					}
				?></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Jurusan Pilihan Pertama</td>
			<td>:</td>
			<td><?php $t = $row['id_jurusan1'];
					if ($t == 1) {
						echo "Rekayasa Perangkat Lunak";
					}elseif ($t == 2) {
						echo "Multimedia";
					}elseif ($t == 3) {
						echo "Teknik Komputer & Jaringan";
					}elseif ($t == 4) {
						echo "Design Graphic";
					}
				?></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; Jurusan Pilihan Kedua</td>
			<td>:</td>
			<td><?php $v = $row['id_jurusan2'];
					if ($v == 1) {
						echo "Rekayasa Perangkat Lunak";
					}elseif ($v == 2) {
						echo "Multimedia";
					}elseif ($v == 3) {
						echo "Teknik Komputer & Jaringan";
					}elseif ($v == 4) {
						echo "Design Graphic";
					}
				?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nomor HP</td>
			<td>:</td>
			<td><?php echo $row['no_telp'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Asal Sekolah</td>
			<td>:</td>
			<td><?php echo $row['asal_sekolah'];?></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><h4>B.&nbsp;Data Orang Tua</h4></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nama Ayah</td>
			<td>:</td>
			<td><?php echo $row['nama_ayah']?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Pekerjaan Ayah</td>
			<td>:</td>
			<td><?php $p_ayah = $row['id_pekerjaan_ayah'];
					if ($p_ayah == 1) {
						echo "Wiraswasta";
					}elseif ($p_ayah == 2) {
						echo "Petani";
					}elseif ($p_ayah == 3) {
						echo "Guru";
					}elseif ($p_ayah == 4) {
						echo "Tentara";
					}elseif ($p_ayah == 5) {
						echo "Nelayan";
					}elseif ($p_ayah == 6) {
						echo "Novelis";
					}elseif ($p_ayah == 7) {
						echo "Programmer";
					}elseif ($p_ayah == 8) {
						echo "Ibu Rumah Tangga";
					}
				?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Penghasilan Ayah</td>
			<td>:</td>
			<td><?php $pg_ayah = $row['id_penghasilan_ayah'];
					if ($pg_ayah == 1) {
						echo "< 500.000";
					}elseif ($pg_ayah == 2) {
						echo "> 500.000";
					}elseif ($pg_ayah == 3) {
						echo "1.250.000";
					}elseif ($pg_ayah == 4) {
						echo "1.500.000";
					}
				 ?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nama Ibu</td>
			<td>:</td>
			<td><?php echo $row['nama_ibu'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Pekerjaan Ibu</td>
			<td>:</td>
			<td><?php $p_ibu = $row['id_pekerjaan_ibu'];
					if ($p_ibu == 1) {
						echo "Wiraswasta";
					}elseif ($p_ibu == 2) {
						echo "Petani";
					}elseif ($p_ibu == 3) {
						echo "Guru";
					}elseif ($p_ibu == 4) {
						echo "Tentara";
					}elseif ($p_ibu == 5) {
						echo "Nelayan";
					}elseif ($p_ibu == 6) {
						echo "Novelis";
					}elseif ($p_ibu == 7) {
						echo "Programmer";
					}elseif ($p_ibu == 8) {
						echo "Ibu Rumah Tangga";
					}
				?></td>
		</tr>
		<tr>
			<td>
				&nbsp;
				&nbsp;
			Penghasilan Ibu</td>
			<td>:</td>
			<td><?php $pg_ibu = $row['id_penghasilan_ibu'];
					if ($pg_ibu == 1) {
						echo "< 500.000";
					}elseif ($pg_ibu == 2) {
						echo "> 500.000";
					}elseif ($pg_ibu == 3) {
						echo "1.250.000";
					}elseif ($pg_ibu == 4) {
						echo "1.500.000";
					}
				 ?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nomor Telepon</td>
			<td>:</td>
			<td><?php echo $row['no_telp'];?></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><h4>C.&nbsp;Nilai UN</h4></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Bahasa Indonesia</td>
			<td>:</td>
			<td><?php echo $row['n_bin'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Ipa</td>
			<td>:</td>
			<td><?php echo $row['n_ipa'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Matematika</td>
			<td>:</td>
			<td><?php echo $row['n_mtk']?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Nilai Bahasa Inggris</td>
			<td>:</td>
			<td><?php echo $row['n_bing'];?></td>
		</tr>
		<tr>
			<td>&nbsp;
				&nbsp;
			Total Nilai</td>
			<td>:</td>
			<td><?php  
					$hasil = $row['n_bin'] + $row['n_ipa'] + $row['n_mtk'] + $row['n_bing'];
					echo $hasil;
				?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>

	</table>
	<table border="0">
		<tr>
			<td colspan="2" style="text-align: justify;">&nbsp;<p>Dengan Kertas Ini di beritahukan bahwa, Kertas Pendaftaran ini sebagai Tanda Bukti Pendaftaran Calon Siswa yang ingin mendaftar ke SMKN 1 Mejayan, &nbsp;Dengan telah diisinya Formulir Pendaftaran Online ini maka siswa telah di berikan kesempatan untuk mendafatar ke SMKN 1 Mejayan melalui Jalur Reguler yaitu dengan Hasil Nilai Ujian Nasional</p></td>
			<td></td>
		</tr>
		<tr>
			<td width="295">&nbsp;</td>
			<td width="406">&nbsp;</td>
		</tr>
		<tr>
			<td align="center">Mengetahui</td>
			<td align="center">Mejayan, <?php echo date("d-m-y");?> </td>

		</tr>
		<tr>
			<td align="center">Orang Tua/Wali </td>
			<td align="center">Yang membuat Pernyataan </td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td align="center" ><strong><u><?php echo $row['nama_ayah'];?></u></strong></td>
			<td align="center"><strong><u><?php // echo $row['nama'];?> Bpk. Suharto M,Pd</u></strong></td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>
<?php

$html = ob_get_contents();//Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML($stylesheet, 1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($dokumen.".pdf", 'I');
exit;
?>