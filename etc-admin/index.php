<?php
	session_start();
	if(isset($_SESSION['username'])) {
	header('location: ../index.php'); }
	require_once("../config/koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/sy-login.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../assets/ie10-viewport-bug-workaround.css" />
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript" src="../assets/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<div class="container">
		<form action="proses-login.php" method="POST" class="form-login" onsubmit="return validasi()">
			<h2 class="form-heading text-center">Login Admin PPDB</h2>
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required />
			<input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		if (username != "" && password != "") {
			return true;
		}else{
			alert("Username atau Password Belum Diisi");
			return false;
		}
	}
</script>

</html>