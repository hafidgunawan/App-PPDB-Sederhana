<?php

if (isset($_POST['submit'])) {
    
    include "../config/koneksi.php";

    $nis = $_POST['nis'];
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

    // Beda
    $n_ayah = $_POST['nama_ayah'];
    $p_ayah = $_POST['pekerjaan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $n_ibu = $_POST['nama_ibu'];
    $p_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];


    $sql = "INSERT INTO peserta_ppdb(nis, nama, tempat_lahir, tgl_lahir, id_jk, id_agama, asal_sekolah, alamat, no_telp, id_jurusan1, id_jurusan2) VALUES ('$nis', '$nama', '$tempat', '$tgl', '$jk', '$agama', '$asal_sekolah', '$alamat', '$no', '$jurusan1', '$jurusan2');";
    $sql .= "INSERT INTO biodata_ortu(nama_ayah, id_pekerjaan_ayah, id_penghasilan_ayah, nama_ibu, id_pekerjaan_ibu, id_penghasilan_ibu, nis) VALUES ('$n_ayah', '$p_ayah', '$penghasilan_ayah', '$n_ibu', '$p_ibu', '$penghasilan_ibu', '$nis');";

    $cetak = mysqli_multi_query($con,$sql);
    if ($cetak) {
        echo "<script type='text/javascript'>alert(\"Data berhasil di daftarkan\");</script>";
        header("location:tambahdata2.php");
    }else{
        echo "<script type='text/javascript'>alert(\"Data gagal di daftarkan\");</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Pendaftaran</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <?php 
                include "../config/koneksi.php";
                    $sql = "SELECT username FROM login";
                    $q = mysqli_query($con,$sql);

                    while($row = mysqli_fetch_array($q)){
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['username'] ?> <b class="caret"></b></a>
                    <?php } ?>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="tambahdata.php"><i class="fa fa-fw fa-bar-chart-o"></i> Pendaftaran</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> List Siswa <i class="caret"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="list-peserta/h-rpl.php"> >> List Peserta RPL</a>
                            </li>
                            <li>
                                <a href="list-peserta/h-mm.php"> >> List Peserta MM</a>
                            </li>
                            <li>
                                <a href="list-peserta/h-tkj.php"> >> List Peserta TKJ</a>
                            </li>
                            <li>
                                <a href="list-peserta/h-dg.php"> >> List Peserta Design Graphic</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="input-peserta.php"><i class="fa fa-fw fa-table"></i> Input Siswa Diterima</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Form Pendaftaran Peserta
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Form Daftar TA 2018 / 2019
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
   <div class="col-md-12">
    <div class="clearfix" style="top: 0;clear: both;"></div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel panel-heading text-center">
                <h3 class="text-center"><span class="fa fa-user"> FORM PENDAFTARAN PPDB</span></h3>
            </div>
            <div class="panel panel-body">
                    <form class="form-horizontal" method="POST" style="margin: 0px auto!important;">
        <fieldset>
            <label><h3 style="font-weight: bold;">A. Data Calon Peserta Didik Baru</h3></label>
            <div class="form-group">
                <label class="col-md-4 control-label">Nomor Induk Siswa Nasional (NISN) :</label>
                <div class="col-md-4">
                    <input type="text" name="nis" placeholder="Masukkan NISN" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Nama Peserta :</label>
                <div class="col-md-4">
                    <input type="text" name="nama" placeholder="Masukkan Nama Peserta" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Tempat Lahir :</label>
                <div class="col-md-4">
                    <input type="text" name="tempat_lahir" placeholder="Contoh : Madiun" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Tgl Lahir :</label>
                <div class="col-md-4">
                    <input type="date" name="tgl_lahir" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Jenis Kelamin :</label>
                <div class="col-md-4">
                    <input type="radio" name="jenis_kelamin" value="1" /> Laki - laki
                    <input type="radio" name="jenis_kelamin" value="2" /> Perempuan
                </div>
            </div>
            <div class="form-group">
        <label class="col-md-4 control-label">Agama :</label>
        <div class="col-md-4">
            <select name="agama" class="form-control">
                <option disabled>-- Pilih Salah Satu --</option>
                <option value="1"> Islam </option>
                <option value="2"> Kristem </option>
                <option value="3"> Katolik </option>
                <option value="4"> Hindhu </option>
                <option value="5"> Budha </option>
                <option value="6"> Kong Hu Cu</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Asal Sekolah :</label>
        <div class="col-md-4">                     
            <textarea class="form-control" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" style="resize: none;"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="Alamat tinggal">Alamat Tempat Tinggal :</label>
        <div class="col-md-4">                     
            <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Rumah" style="resize: none;"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">No Telpon :</label>  
        <div class="col-md-4">
            <input name="no_telp" type="text" placeholder="No WA / Telegram" class="form-control input-md">
            <span class="help-block">*Note : No Telpon harus bisa dihubungi</span>  
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Jurusan Pertama :</label>
        <div class="col-md-4">
            <select name="jurusan1" class="form-control">
                <option disabled>-- Pilih Salah Satu --</option>
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
                <option disabled>-- Pilih Salah Satu --</option>
                <option value="1"> Rekayasa Perangkat Lunak </option>
                <option value="2"> Multimedia </option>
                <option value="3"> Teknik Komputer & Jaringan </option>
                <option value="4"> Design Graphic </option>
            </select>
        </div>
    </div>
    <label><h3 style="font-weight: bold; margin-top: 0;">B. Data Orang Tua Wali Murid</h3></label>
    <div class="form-group">
        <label class="col-md-4 control-label">Nama Ayah :</label>
        <div class="col-md-4">
            <input type="text" name="nama_ayah" placeholder="Masukkan Nama Ayah" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Pekerjaan Ayah :</label>
        <div class="col-md-4">
            <select name="pekerjaan_ayah" class="form-control">
                <option disabled>-- Pilih Salah Satu --</option>
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
            <input type="text" name="nama_ibu" placeholder="Masukkan Nama Ayah" class="form-control input-md">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Pekerjaan Ibu :</label>
        <div class="col-md-4">
            <select name="pekerjaan_ibu" class="form-control">
                <option disabled>-- Pilih Salah Satu --</option>
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
                <option value="1"> < 500.000 </option>
                <option value="2"> > 500.000 </option>
                <option value="3"> 1.250.000 </option>
                <option value="4"> 1.500.000 </option>
            </select>
        </div>
    </div>
<!--    <div class="form-group">
        <label class="col-md-4 control-label">Nama Orang Tua / Wali :</label>
        <div class="col-md-4">
            <input type="text" name="nama_ortu" placeholder="Masukkan Nama Wali Murid" class="form-control input-md">
        </div>
    </div>
        <div class="form-group">
        <label class="col-md-4 control-label">No Telpon Wali Murid :</label>  
        <div class="col-md-4">
            <input name="no_telp" type="text" placeholder="No WA / Telegram" class="form-control input-md"> 
        </div>
    </div> -->
    <!-- Yang Asli -->
    <!-- <div class="form-group">
        <label class="col-md-4 control-label">Penghasilan Orang Tua :</label>
        <div class="col-md-4">
            <select name="penghasilan_ortu" class="form-control">
                <option value="1"> < 500.000 </option>
                <option value="2"> > 500.000 </option>
                <option value="3"> 1.250.000 </option>
                <option value="4"> 1.500.000 </option>
            </select>
        </div>
    </div> -->
    <!-- Akhir -->
    <div class="form-group">
        <div class="col-md-12">
            <div class="panel panel-default" style="width: 45%; margin: 0px auto!important;">
                <div class="panel panel-body">
                    <p class="text-center">Syarat & Ketentuan :</p>
                    <p class="">
                        1. Calon siswa datang ke Sekolah yang dituju dengan membawa persyaratan sesuai ketentuan.<br/>
                        2. Kemudian meminta formulir pendaftaran kepada Panitia bagian informasi dan pembagian formuli pendaftaran.<br/>
                        3. Calon siswa mengisi formulir tersebut dengan meminta panduan kepada panitia.<br/>
                        4. Setelah selesai, kembalikan formulir tersebut kepada panitia.<br/>
                        5. Selanjutnya panitia akan mengentry data pendaftaran ke komputer. Panitia akan melakukan verifikasi data serta berkas-berkas pendaftaran calon siswa.<br/>
                        6. Setlah data pendaftaran dinyatakan sah sesuai dengan ketentuan pendaftaran, maka panitia akan memberikan tanda bukti pendaftaran kepada calon siswa.<br/>
                        7. Calon siswa menerima tanda bukti pendaftaran untuk dipergunakan sesuai aturan.
                        8. Untuk Mendaftar Bisa Klik Disini.
                    </p>
                </div>
            </div>
    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-4" style="margin-top: 10px; margin-left: 20px;">
            <input type="submit" name="submit" value="Daftar" class="btn btn-default">
        </div>
    </div>
<!--        </fieldset> -->
    </form>
    </div>
            </div>
            <div class="panel panel-footer text-center">
                 &copy; &nbsp;Copyright BLC TELKOM KLATEN 2017/2018 Created By <a href="">Abdul Hafid Gunawan</a>
          </div>
        </div>
    </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../assets/js/plugins/morris/raphael.min.js"></script>
    <script src="../assets/js/plugins/morris/morris.min.js"></script>
    <script src="../assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>
