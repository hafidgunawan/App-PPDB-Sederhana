<?php
    session_start();

    include "../config/koneksi.php";

    $sql = "SELECT  nis, nama, tempat_lahir, tgl_lahir, id_jk, id_agama, asal_sekolah, alamat, no_telp, nama_ortu, id_penghasilan_ortu FROM peserta_ppdb";
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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

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
            <?php include "nav.php"; ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php include "nav-vc.php"; ?>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Daftar Peserta PPDB TA 2018 / 2019
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Daftar Peserta
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!--============================================ HEADER ============================================-->
    <header>
            <div class="container-fluid">
                <div class="container text-center">
                    <h2 style="font-weight: bold;">List Data Peserta PPDB</h2>
                    <hr>
                </div>
            </div>
    </header>
    <!--========================================== BATAS HEADER ==========================================-->
    <div class="container-fluid" style="width: 100%; margin: 0px auto !important;">
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
                            <th width="20%">Aksi</th>
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
                            <td><a href="ubah-data.php?nis=<?php echo $data['nis'] ?>" class="btn btn-success"><span class="fa fa-edit"> Edit</span></a> | <a href="hapus-data.php?nis=<?php echo $data['nis'] ?>" class="btn btn-danger"><span class="fa fa-trash-o"> Hapus</span></a></td>
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
