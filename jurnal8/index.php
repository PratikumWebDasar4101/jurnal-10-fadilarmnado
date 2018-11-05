<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>ea</title>
</head>
<body>
	<form method="post">
		<center>
		<table>
			<tr>

				<td colspan="2"><center>LOGIN</center></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="login"></td>
			</tr>
			<tr>
				<td>belum login?</td>
				<td><a href="register.php">registrasi</a></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>

<?php
session_start();
	include_once 'koneksi.php';
if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql = mysqli_query($conn,"select * from registrasi where username = '$user' && pass = '$pass'");
	$row = mysqli_num_rows($sql);
	if ($row == 1) {
		$_SESSION['username'] = $user;
		header("location: dashboard.php");
	}
 }


?>
