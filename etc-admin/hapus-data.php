<?php
include "../config/koneksi.php";

	$nis = $_GET['nis'];

	$sql = "DELETE FROM peserta_ppdb WHERE nis='$nis'";
	$hasil = mysqli_query($con, $sql);

	if ($hasil) {
		echo "<script>alert(\"Data berhasil dihapus\"); </script>";
	}else{
		echo "Data gagal dihapus";
	}

	// multiple Insert
	// $sql = "INSERT INTO TABLE1(field1, field2, field3) VALUES('value1',value2,value3); INSERT INTO STOCK(field) VALUES ('value1');";
	// multi_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="0.1;url=dashboard.php">
	<title></title>
</head>
<body>

</body>
</html>