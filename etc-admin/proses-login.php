<?php
session_start();
include '../config/koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM login WHERE username='$user' AND password='$pass'";
$query = mysqli_query($con, $sql);
$hasil = mysqli_fetch_assoc($query);

if($hasil != null){
	if ($pass==$hasil['password']){
		$_SESSION['username'] = $hasil;
		header("location: dashboard.php");
	}else {
		header("location: index.php");
	}
}else {
	header("location: index.php");
}
?>