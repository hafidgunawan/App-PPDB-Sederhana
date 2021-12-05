<?php
include "../config/koneksi.php";
	if (isset($_POST['daftar'])) {
		
		include "../config/koneksi.php";

		$nis = $_POST['nis'];
		$bin = $_POST['n_bin'];
		$mtk = $_POST['n_mtk'];
		$ipa = $_POST['n_ipa'];
		$big = $_POST['n_bing'];

		$sql = "INSERT INTO nilai(nis, n_bin, n_mtk, n_ipa, n_bing) VALUES ('$nis','$bin','$mtk','$ipa','$big')";
		$query = mysqli_query($con,$sql);

		if($query) {
			echo "<script type='text/javascript'>alert(\"Data berhasil di daftarkan\");</script>";
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                <h3 class="text-center"><span class="fa fa-user"> FORM PENDAFTARAN NILAI PPDB</span></h3>
            </div>
            <div class="panel panel-body">
                    <form class="form-horizontal" method="POST" style="margin: 0px auto!important;">
        <fieldset>
            <label><h3 style="font-weight: bold;">C. Data Nilai Peserta Didik Baru</h3></label>
            <div class="form-group">
                <label class="col-md-4 control-label">NISN :</label>
                <div class="col-md-4">
                    <input type="number" name="nis" placeholder="Masukkan Nomor NISN" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Nilai Bahasa Indonesia :</label>
                <div class="col-md-4">
                    <input type="number" name="n_bin" placeholder="Masukkan Nilai" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Nilai Matematika :</label>
                <div class="col-md-4">
                    <input type="number" name="n_mtk" placeholder="Masukkan Nilai" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Nilai Ilmu Pengetahuan Alam :</label>
                <div class="col-md-4">
                    <input type="number" name="n_ipa" placeholder="Masukkan Nilai" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Nilai Bahasa Inggris :</label>
                <div class="col-md-4">
                    <input type="number" name="n_bing" placeholder="Masukkan Nilai" class="form-control input-md">
                </div>
            </div>
    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-4" style="margin-top: 10px; margin-left: 20px;">
            <input type="submit" name="daftar" value="Daftar" class="btn btn-default">
            <a href="tambahdata.php" class="btn btn-success">Kembali</a>
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
