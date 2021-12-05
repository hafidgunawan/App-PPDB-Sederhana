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
                    <li>
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
                    <li class="active">
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Input Siswa Diterima</a>
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
                   <!--  <select class="form-control" id="NISN"> -->
                        <?php
                            // include "../config/koneksi.php";

                            // $sql = "SELECT * FROM peserta_ppdb";
                            // $query = mysqli_query($con,$sql);
                            //     foreach ($query as $q){
                            //         echo "<option name='nis' value='$q[nis]'> $q[nis] - $q[nama]</option>";    
                            //     }
                        ?>
                    <!-- </select> -->
                    <?php
                        $con = mysqli_connect("localhost","root","root", "AppPPDB");
                        $result = mysqli_query($con, "select peserta_ppdb.*, jurusan.jurusan from peserta_ppdb INNER JOIN jurusan ON peserta_ppdb.id_jurusan1=jurusan.id_jurusan");
                        $jsArray = "var prdName = new Array();\n";
                        echo '<select class="form-control" name="prdId" onchange="changeValue(this.value)">';
                        echo '<option>-- Pilih Salah Satu NISN --</option>';
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option name="nis" value="' . $row['nis'] . '">' . $row['nis'] . ' - &nbsp;' . $row['nama'] .'</option>';
                            $jsArray .= "prdName['" . $row['nis'] . "'] = {nis:'" . $row['nis'] . "',name:'" . $row['nama'] . "',jurusan:'".$row['jurusan']."',sekolah:'".$row['asal_sekolah']."'};\n";
                        }
                        echo '</select>';

                        function postNis($x){
                            $x = $row;
                            $x = $_POST['nis'];
                            return $x;
                        }

                    ?>
                    </div>
                    <!-- <div class="col-md-3">
                        <input type="submit" name="search" class="form-control" value="Search" style="padding: 5.5px 0 10px 0"; />
                    </div> -->
                </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Peserta :</label>
                        <div class="col-md-6">
                            <input type="hidden" name="nis" id="prd_nis" />
                            <input type="text" name="nama" class="form-control input-md" placeholder="Masukkan Nama Peserta" id="prd_name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jurusan Pilihan Pertama :</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control input-md" placeholder="Masukkan Nama Jurusan" id="prd_desc" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" id="prd_jurusan">Jurusan Fix :</label>
                        <div class="col-md-6">
                            <!-- <input type="text" name="jurusan" class="form-control input-md" placeholder="Masukkan Nama Jurusan" id="prd_desc" /> -->
                            <select name="jurusan" class="form-control">
                                <option disabled>-- Pilih Salah Satu --</option>
                                <option value="1">Rekayasa Perangkat Lunak</option>
                                <option value="2">Multimedia</option>
                                <option value="3">Teknik Komputer & Jaringan</option>
                                <option value="4">Design Graphic</option>
                            </select>
                    </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Asal Sekolah :</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="asal_sekolah" id="prd_sekolah" placeholder="Masukkan Alamat Sekolah" style="resize: none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nomor Pendaftaran :</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control input-md" placeholder="Masukkan no_pendaftaran" name="no_pendaftaran">
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

    <!-- Change Value -->
    <script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(id){
    document.getElementById('prd_nis').value = prdName[id].nis;
    document.getElementById('prd_name').value = prdName[id].name;
    document.getElementById('prd_desc').value = prdName[id].jurusan;
    document.getElementById('prd_sekolah').value = prdName[id].sekolah;
    };
    </script>
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
